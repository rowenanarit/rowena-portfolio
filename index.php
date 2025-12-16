<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rowena L. Narit - UI/UX Designer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
        }

        .section-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 2rem 1rem;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .fade-in {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        .nav-fixed {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            background: rgba(26, 26, 26, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .skill-bar {
            height: 8px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 10px;
            transition: width 1s ease-out;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink {
            50% { opacity: 0; }
        }

        .typing-cursor {
            animation: blink 1s step-end infinite;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="nav-fixed">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="text-white font-bold text-xl">
                   RN<span class="text-purple-400">.</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="nav-link text-white hover:text-purple-400 transition">Home</a>
                    <a href="#about" class="nav-link text-white hover:text-purple-400 transition">About</a>
                    <a href="#projects" class="nav-link text-white hover:text-purple-400 transition">Projects</a>
                    <a href="#resume" class="nav-link text-white hover:text-purple-400 transition">Resume</a>
                    <a href="#contact" class="nav-link text-white hover:text-purple-400 transition">Contact</a>
                </div>
                <button id="mobile-menu-btn" class="md:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-900 px-4 pb-4">
            <a href="#home" class="block py-2 text-white hover:text-purple-400">Home</a>
            <a href="#about" class="block py-2 text-white hover:text-purple-400">About</a>
            <a href="#projects" class="block py-2 text-white hover:text-purple-400">Projects</a>
            <a href="#resume" class="block py-2 text-white hover:text-purple-400">Resume</a>
            <a href="#contact" class="block py-2 text-white hover:text-purple-400">Contact</a>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="section-container pt-20">
        <div class="max-w-7xl mx-auto w-full">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Profile Image -->
                <div class="flex justify-center fade-in delay-1">
                    <div class="relative float-animation">
                        <div class="w-80 h-80 rounded-full bg-gradient-to-br from-purple-400 to-pink-400 p-1">
                            <div class="w-full h-full rounded-full bg-white p-2">
                                <img src="Img/nar.jpg" alt="Rowena L. Narit" class="w-full h-full object-cover rounded-full shadow-2xl">
                            </div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-purple-400 rounded-full opacity-30 blur-2xl"></div>
                        <div class="absolute -top-4 -left-4 w-32 h-32 bg-pink-400 rounded-full opacity-30 blur-2xl"></div>
                    </div>
                </div>

                <!-- Content -->
                <div class="text-white space-y-6">
                    <p class="text-2xl font-semibold fade-in delay-2">Hello, I'm</p>
                    <h1 class="text-5xl md:text-6xl font-black leading-tight fade-in delay-3">
                        Rowena L. Narit
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-bold fade-in delay-4">
                        <span id="typing-text">UI/UX Designer</span><span class="typing-cursor">|</span>
                    </h2>
                    <p class="text-lg text-gray-200 leading-relaxed fade-in delay-4">
                       I am a motivated UI/UX Designer and Web Developer skilled in user-centered design, front-end coding, and responsive websites. I create intuitive interfaces and performant web apps to boost user engagement and business growth.
                    </p>

                    <!-- Social Links -->
                    <div class="flex gap-4 pt-4 fade-in delay-4">
                        <a href="https://github.com/Rc-Knowlegehub" target="_blank" class="w-12 h-12 flex items-center justify-center bg-white/10 backdrop-blur-sm text-white rounded-full hover:bg-white hover:text-purple-600 transition-all duration-300">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://www.facebook.com/share/1C3VvZd77R/" target="_blank" class="w-12 h-12 flex items-center justify-center bg-white/10 backdrop-blur-sm text-white rounded-full hover:bg-white hover:text-purple-600 transition-all duration-300">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/weynnaaaaaaaaa" target="_blank" class="w-12 h-12 flex items-center justify-center bg-white/10 backdrop-blur-sm text-white rounded-full hover:bg-white hover:text-purple-600 transition-all duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" target="_blank" class="w-12 h-12 flex items-center justify-center bg-white/10 backdrop-blur-sm text-white rounded-full hover:bg-white hover:text-purple-600 transition-all duration-300">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-4 fade-in delay-4">
                        <a href="#contact" class="inline-flex items-center px-8 py-4 bg-white text-purple-600 font-bold rounded-full hover:bg-purple-100 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <i class="fas fa-envelope mr-2"></i>
                            Get In Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-container bg-white/95 backdrop-blur-sm">
        <div class="max-w-6xl mx-auto w-full">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-black gradient-text mb-4">About Me</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Personal Details -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Personal Details</h3>
                    <div class="space-y-4">
                        <div class="flex">
                            <span class="w-32 font-semibold text-purple-600">Name:</span>
                            <span class="text-gray-700">Rowena L. Narit</span>
                        </div>
                        <div class="flex">
                            <span class="w-32 font-semibold text-purple-600">Birthday:</span>
                            <span class="text-gray-700">July 13, 1999</span>
                        </div>
                        <div class="flex">
                            <span class="w-32 font-semibold text-purple-600">Age:</span>
                            <span class="text-gray-700">26</span>
                        </div>
                        <div class="flex">
                            <span class="w-32 font-semibold text-purple-600">Location:</span>
                            <span class="text-gray-700">Tagum City, Philippines</span>
                        </div>
                        <div class="flex">
                            <span class="w-32 font-semibold text-purple-600">Email:</span>
                            <span class="text-gray-700 text-sm">rowenanarit35@gmail.com</span>
                        </div>
                        <div class="flex">
                            <span class="w-32 font-semibold text-purple-600">Phone:</span>
                            <span class="text-gray-700">+63 985 447 7209</span>
                        </div>
                    </div>
                </div>

                <!-- Summary -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Summary</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        I’m a dedicated UI/UX Designer and Web Developer.I'am Bachelor of Science in Information Technology student at St.John Paul II College of Davao. I’m driven by a passion for creating meaningful designs that blend creative vision with practical usability.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        My aim is to create focused, intuitive, and impactful digital experiences. Backed by a solid understanding of user-centered design and hands-on experience in responsive design, I enjoy building user-friendly applications that make technology both accessible and engaging.
                    </p>

                    <!-- Skills -->
                    <div class="mt-8">
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Skills</h4>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="font-semibold text-gray-700">HTML/CSS</span>
                                    <span class="text-gray-600">80%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="font-semibold text-gray-700">UI/UX Design</span>
                                    <span class="text-gray-600">90%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="font-semibold text-gray-700">JavaScript</span>
                                    <span class="text-gray-600">75%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
<section id="projects" class="section-container bg-white/95 backdrop-blur-sm">
  <div class="max-w-6xl mx-auto w-full">
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-black gradient-text mb-4">Projects</h2>
      <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto"></div>
      <p class="text-gray-600 mt-4">
        A selection of UI/UX and web development projects showcasing my design process and coding skills.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Project Card 1 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow-lg card-hover flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Portfolio Website</h3>
          <p class="text-sm text-gray-700 mb-3">
            Personal responsive portfolio built with HTML, Tailwind CSS, and JavaScript focusing on smooth interactions.
          </p>
          <p class="text-xs text-purple-600 font-semibold mb-4">UI/UX · Frontend</p>
        </div>
        <div class="flex gap-3 mt-4">
          <!-- Live Demo (view project) -->
          <a href="https://your-live-site-link.com"
             target="_blank"
             class="flex-1 inline-flex items-center justify-center px-3 py-2 text-xs font-semibold rounded-full bg-purple-600 text-white hover:bg-purple-700 transition">
            <i class="fas fa-external-link-alt mr-2"></i> Live Demo
          </a>
          <!-- Code / Download -->
          <a href="https://github.com/your-username/your-portfolio-repo"
             target="_blank"
             class="flex-1 inline-flex items-center justify-center px-3 py-2 text-xs font-semibold rounded-full border border-purple-600 text-purple-600 hover:bg-purple-50 transition">
            <i class="fab fa-github mr-2"></i> Code / Download
          </a>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow-lg card-hover flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Personal Expense Tracker</h3>
          <p class="text-sm text-gray-700 mb-3">
            Productivity app focused on clean layouts and intuitive navigation.
          </p>
          <p class="text-xs text-purple-600 font-semibold mb-4">UI/UX Design</p>
        </div>
        <div class="flex gap-3 mt-4">
          <!-- Live Prototype -->
          <a href="https://www.figma.com/proto/8RYi2wTBPO0Gg4nud2AFOb/Mobile_app_design-%7C-Todo-app--Community-?node-id=0-1&t=gXK76D4u6MBYw6um-1"
             target="_blank"
             class="flex-1 inline-flex items-center justify-center px-3 py-2 text-xs font-semibold rounded-full bg-purple-600 text-white hover:bg-purple-700 transition">
            <i class="fas fa-play mr-2"></i> View Prototype
          </a>
          <!-- Case Study / Code -->
          <a href="https://github.com/your-username/your-app-repo"
             target="_blank"
             class="flex-1 inline-flex items-center justify-center px-3 py-2 text-xs font-semibold rounded-full border border-purple-600 text-purple-600 hover:bg-purple-50 transition">
            <i class="fab fa-android mr-2"></i> Mobile App (APK)
          </a>
        </div>
      </div>

      <!-- Project Card 3 -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow-lg card-hover flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Manage Product Inventory Dashboard</h3>
          <p class="text-sm text-gray-700 mb-3">
            Admin dashboard interface with data visualization and responsive grid layout.
          </p>
          <p class="text-xs text-purple-600 font-semibold mb-4">UI Design · Web</p>
        </div>
        <div class="flex gap-3 mt-4">
          <!-- Live Demo -->
          <a href="https://naritrowena.ct.ws"
             target="_blank"
             class="flex-1 inline-flex items-center justify-center px-3 py-2 text-xs font-semibold rounded-full bg-purple-600 text-white hover:bg-purple-700 transition">
            <i class="fas fa-chart-bar mr-2"></i> Live Demo

          </a>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Resume Section -->
    <section id="resume" class="section-container bg-gray-50">
        <div class="max-w-6xl mx-auto w-full">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-black gradient-text mb-4">Resume</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Education -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-graduation-cap text-purple-600 mr-3"></i>
                        Education
                    </h3>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-xl shadow-md card-hover border-l-4 border-purple-500">
                            <h4 class="text-lg font-bold text-gray-900">B.S. in Information Technology</h4>
                            <p class="text-purple-600 font-semibold">St. John Paul II College of Davao</p>
                            <p class="text-sm text-gray-600 mt-1">2022 - Present</p>
                            <p class="text-sm text-gray-700 mt-2">Focus on UI\UX design and Web Development</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-md card-hover border-l-4 border-purple-500">
                            <h4 class="text-lg font-bold text-gray-900">Senior High School (TECHVOC)</h4>
                            <p class="text-purple-600 font-semibold">Tagum National Trade School</p>
                            <p class="text-sm text-gray-600 mt-1">2020 - 2021</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-md card-hover border-l-4 border-purple-500">
                            <h4 class="text-lg font-bold text-gray-900">Junior High School</h4>
                            <p class="text-purple-600 font-semibold">Tagum Nationa High School</p>
                            <p class="text-sm text-gray-600 mt-1">2015 - 2016</p>
                        </div>
                    </div>
                </div>

                <!-- Experience -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-briefcase text-purple-600 mr-3"></i>
                        Experience
                    </h3>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-xl shadow-md card-hover border-l-4 border-pink-500">
                            <h4 class="text-lg font-bold text-gray-900">Working Student</h4>
                            <p class="text-pink-600 font-semibold">Computer Attendant </p>
                            <p class="text-sm text-gray-600 mt-1">2020 - Present</p>
                            <p class="text-sm text-gray-700 mt-2">Balancing work and studies while developing professional skills.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-md card-hover border-l-4 border-pink-500">
                            <h4 class="text-lg font-bold text-gray-900">Laundry Shop</h4>
                            <p class="text-pink-600 font-semibold">Cashier</p>
                            <p class="text-sm text-gray-600 mt-1">2016-2017</p>
                            <p class="text-sm text-gray-700 mt-2"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-container bg-white/95 backdrop-blur-sm">
        <div class="max-w-4xl mx-auto w-full">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-black gradient-text mb-4">Get In Touch</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto mb-4"></div>
                <p class="text-gray-600">Have a project idea or just want to chat? Send me a message!</p>
            </div>

            <!-- Contact Info Cards -->
            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <div class="bg-gradient-to-br from-purple-500 to-pink-500 p-6 rounded-xl text-white text-center card-hover">
                    <i class="fas fa-map-marker-alt text-3xl mb-3"></i>
                    <h4 class="font-bold mb-1">Location</h4>
                    <p class="text-sm">Tagum City, Philippines</p>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-pink-500 p-6 rounded-xl text-white text-center card-hover">
                    <i class="fas fa-envelope text-3xl mb-3"></i>
                    <h4 class="font-bold mb-1">Email</h4>
                    <p class="text-sm">rowenanarit35@gmail.com</p>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-pink-500 p-6 rounded-xl text-white text-center card-hover">
                    <i class="fas fa-phone text-3xl mb-3"></i>
                    <h4 class="font-bold mb-1">Phone</h4>
                    <p class="text-sm">+63 985 447 7209</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg">
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"></textarea>
                    </div>
                    <button class="w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold py-4 rounded-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        Send Message <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2025 Rowena L. Narit | All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Smooth scroll for nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });

        // Typing Animation
        const roles = ['UI/UX Designer 🎨', 'Web Developer 💻'];
        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function type() {
            const typingElement = document.getElementById('typing-text');
            const currentRole = roles[roleIndex];
            
            if (isDeleting) {
                charIndex--;
                typingElement.textContent = currentRole.substring(0, charIndex);
            } else {
                charIndex++;
                typingElement.textContent = currentRole.substring(0, charIndex);
            }

            let speed = isDeleting ? 50 : 100;

            if (!isDeleting && charIndex === currentRole.length) {
                speed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                roleIndex = (roleIndex + 1) % roles.length;
                speed = 500;
            }

            setTimeout(type, speed);
        }

        setTimeout(type, 1000);

        // Animate skill bars on scroll
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.querySelectorAll('.skill-progress').forEach(bar => {
                        bar.style.width = bar.style.width;
                    });
                }
            });
        }, observerOptions);

        const aboutSection = document.querySelector('#about');
        if (aboutSection) observer.observe(aboutSection);
    </script>

</body>
</html>
