document.addEventListener('DOMContentLoaded', () => {
    // Initialize Lucide icons
    lucide.createIcons();

    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.getElementById('menu-toggle');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const navLinks = document.querySelectorAll('.nav-link');
    const contentContainer = document.getElementById('content-container');

    // --- Mobile Sidebar Toggle Logic ---

    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        sidebarOverlay.classList.remove('opacity-50', 'pointer-events-auto');
        sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
    }

    function openSidebar() {
        sidebar.classList.remove('-translate-x-full');
        sidebarOverlay.classList.add('opacity-50', 'pointer-events-auto');
        sidebarOverlay.classList.remove('opacity-0', 'pointer-events-none');
    }

    menuToggle.addEventListener('click', () => {
        if (sidebar.classList.contains('-translate-x-full')) {
            openSidebar();
        } else {
            closeSidebar();
        }
    });

    sidebarOverlay.addEventListener('click', closeSidebar);
    
    // Close sidebar when a nav link is clicked (mobile only)
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 768) { 
                closeSidebar();
            }
        });
    });

    // --- Dynamic Content Loading and Switching Logic ---
    
    async function loadSection(targetId) {
        const url = `sections/${targetId}.html`; // File path based on data-section attribute

        // 1. Deactivate all nav links
        navLinks.forEach(link => {
            link.classList.remove('active-nav-link');
        });

        // 2. Activate the target nav link
        const targetLink = document.querySelector(`.nav-link[data-section="${targetId}"]`);
        if (targetLink) {
            targetLink.classList.add('active-nav-link');
        }

        // 3. Load the new content
        try {
            // Apply fade-out effect
            contentContainer.classList.add('opacity-0');
            await new Promise(resolve => setTimeout(resolve, 300)); // Wait for fade-out

            const response = await fetch(url);
            if (!response.ok) {
                throw new Error(`Failed to load ${url}: ${response.statusText}`);
            }
            const htmlContent = await response.text();
            
            // Insert new content
            contentContainer.innerHTML = htmlContent;

            // Re-initialize Lucide icons for the newly loaded content
            lucide.createIcons();

            // Re-run the typing animation logic specifically for the Home section
            if (targetId === 'home') {
                initTypingAnimation();
            }

            // Apply fade-in effect
            contentContainer.classList.remove('opacity-0');

        } catch (error) {
            console.error('Error loading section:', error);
            contentContainer.innerHTML = `<div class="p-10 text-red-600 bg-red-50 rounded-lg">Error loading content for ${targetId}.</div>`;
        }
    }

    // Handle navigation clicks
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-section');
            // Update URL hash without forcing a full page reload
            window.location.hash = targetId; 
            loadSection(targetId);
        });
    });

    // Initial load check for hash or default to 'home'
    function loadInitialSection() {
        const hash = window.location.hash.substring(1);
        const defaultSection = 'home';
        const targetSection = (hash && document.querySelector(`.nav-link[data-section="${hash}"]`)) ? hash : defaultSection;
        
        loadSection(targetSection);
    }
    
    // Listen for browser history changes (back/forward)
    window.addEventListener('hashchange', () => {
        const hash = window.location.hash.substring(1);
        if (hash) {
             loadSection(hash);
        } else {
             loadSection('home');
        }
    });

    // Execute on initial page load
    loadInitialSection();


    // --- Typing Animation Logic (Moved to a separate function) ---
    function initTypingAnimation() {
        const words = ["I'm a UI/UX Designer", "I'm an aspiring UI/UX Designer", "passionate about building", "responsive design"];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingTextElement = document.getElementById('typing-text');
        const typingCursorElement = document.getElementById('typing-cursor');

        if (!typingTextElement || !typingCursorElement) return; // Exit if elements aren't loaded

        function type() {
            const currentWord = words[wordIndex % words.length];
            
            if (isDeleting) {
                typingTextElement.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingTextElement.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = 90;

            if (isDeleting) {
                typeSpeed /= 2; 
            }

            if (!isDeleting && charIndex === currentWord.length) {
                typeSpeed = 2000; 
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex++;
                typeSpeed = 500; 
            }
            
            // Check if the element is still in the DOM before setting timeout
            if (document.getElementById('typing-text')) {
                setTimeout(type, typeSpeed);
            }
        }
        
        // Ensure the cursor starts visible (CSS handles blinking)
        typingCursorElement.style.opacity = 1; 
        type(); // Start the animation
    }
});