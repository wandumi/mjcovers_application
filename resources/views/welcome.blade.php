<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MJCovers | Your number one sun protection trade</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css"
        integrity="sha512-ZYg+hQvLlM0W9C3P6vTpes5LmJ66G2EsroxDNzwD6qiulckldb29eD9I672HL2X+LH5nRhY1sQqZLJGB+aUUPg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/mobile.cs') }}s" />
    <link rel="stylesheet" href="{{ asset('front/css/menu.css') }}" />

</head>

<body>
<!-- whole Content -->
<div>
    <!-- Main Menu -->
    <nav class="main-header">
        <div class="container" id="top-menu">
            <div class="top-menu">
                <div class="site-nav">
                    <div style="padding-right: 10px;">
                        <i class="icon fas fa-phone-alt" ></i><a class="color:#eee;" href="tel:+27 772 657 1460">+27 787 777 4773</a>
                    </div>

                    <div>
                        <i class=" icon fas fa-envelope" ></i><a class="color:#eee;" href="mailto:info@mjcovers.co.za">info@mjcovers.co.za</a>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <a href="{{ url("login") }}" class="site-nav" id="login">
                    Login
                </a>
            </div>
        </div>
        <div class="container navigation">
            <a href="{{ url("/") }}">
                <img src="{{ asset("front/images/mjcover_logo.jpg") }}" alt="logo" class="brand-logo" />

            </a>

            <ul class="site-nav" id="navMenuDesktop">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#about">What we do</a>
                </li>
                <li>
                    <a href="#products">Products</a>
                </li>
                <li>
                    <a href="#home-showcase">Showcase</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
            <div class="menu" id="toggleMenuMobile">
                <li class="menu-lines"></li>
                <li class="menu-lines"></li>
                <li class="menu-lines"></li>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <header id="showcase">
        <div class="container">
            <div class="showcase-container">
                <div class="showcase-content">
                    <h1>Welcome to MJCovers</h1>
                    <p>
                        MJ Covers is one of the leading South African company in the sun
                        protection trade. We provide professional services to Agents for
                        Private / Domestic, Commercial, Corporate large and small.
                        Whether you require blinds or awnings for your home or business,
                        we can assist you.
                    </p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </header>

    <!-- about -->
    <section id="about">
        <div class="container">
            <h2 class="heading">What we Do</h2>
            <p>
                We have experience in manufacturing of blinds and awnings, and we
                are good at what we do. Excellent service delivery is our first
                priority. We provide quality and affordable blinds & awnings.
            </p>

            <div class="about-container">
                <div class="about-items">
                    <i class="fas fa-pencil-alt"></i>

                    <div>
                        <h3 class="letter-space">Great Service</h3>
                        <p class="whatwedo-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Magni, molestiae.
                        </p>
                    </div>
                </div>
                <div class="about-items">
                    <i class="fas fa-check"></i>
                    <div>
                        <h3 class="letter-space">Quality Products</h3>
                        <p class="whatwedo-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Magni, molestiae.
                        </p>
                    </div>
                </div>
                <div class="about-items">
                    <i class="fas fa-briefcase"></i>
                    <div>
                        <h3 class="letter-space">Best Materials</h3>
                        <p class="whatwedo-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Magni, molestiae.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Products -->
    <section id="products">
        <div class="container">
            <div class="covers-container">
                <!-- Header -->
                <div class="whatwedo-header">
                    <h2 class="heading">Products</h2>
                </div>
                <!-- Location -->
                <div class="whatwedo-main">
                    <div class="whatwedo">

                        <h3>Outdoor Canvas Blinds</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Sheerweave Blinds</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Awnings</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Thatching</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Furniture Covers</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Bakkie Covers</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Convas Conopies</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Upholstery</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Tents</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Truck Curtains</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Tarpaulins</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Umbrellas</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Gazebos</h3>

                    </div>
                    <div class="whatwedo">

                        <h3>Pool Covers</h3>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- call to action -->
    <section id="call-action">
        <div class="container">
            <p class="letter-space">
                Still Have Some Questions Left?<br />
                Call us for a Free Consultation at
            </p>
            <a href="tel:+27 772 657 1460">+27 772 657 1460</a>
        </div>
    </section>

    <!-- Showcase -->
    <section id="home-showcase">
        <div class="container showcase-container">
            <h2 id="gallery" class="heading">Some of our Recent Work</h2>

            <div class="article-container">
                <article class="card">
                    <img src="{{'front/images/articles/ent1.jpg'}}" alt="" />
                </article>
                <article class="card">
                    <img src="{{'front//images/articles/ent1.jpg'}}" alt="" />
                </article>
                <article class="card">
                    <img src="{{'front//images/articles/ent1.jpg'}}" alt="" />
                </article>
                <article class="card">
                    <img src="{{'front//images/articles/ent1.jpg'}}" alt="" />
                </article>
                <article class="card">
                    <img src="{{'front//images/articles/ent1.jpg'}}" alt="" />
                </article>
                <article class="card">
                    <img src="{{'front//images/articles/ent1.jpg'}}" alt="" />
                </article>
                <article class="card">
                    <img src="{{'front//images/articles/ent1.jpg'}}" alt="" />
                </article>
                <article class="card">
                    <img src="{{'front//images/articles/ent1.jpg'}}" alt="" />
                </article>
            </div>





            <!-- the end of the content -->
        </div>
    </section>

    <!-- Contact Us -->
    <section id="contact">
        <div class="container">
            <div class="header-contact">
                <h2 class="heading">Contact Us</h2>
                <p>Please contact us for more information</p>
            </div>
            <div class="contact-container">
                <!-- Location -->
                <div>
                    <div class="address-items">
                        <li>
                            <i class="icon fas fa-map"></i>19 Bertha Road, Mostyln Park,
                            Kyasand
                        </li>
                    </div>
                    <div class="address-items">
                        <li>
                            <i class="icon fas fa-phone-alt"></i
                            >
                            <span>
                    <a href="tel:+27 772 657 1460"
                    >+27 772 657 1460</a>

                  </span>
                        </li>
                    </div>
                    <div class="address-items">
                        <li >
                            <i class="icon fas fa-envelope"></i>
                            <a href="mailto:allseasonfabrics1@gmail.com">allseasonfabrics1@gmail.com</a>

                        </li>
                    </div>
                    <div class="address-items">
                        <li>
                            <i class="icon facebook fab fa-facebook-f"></i
                            ><a href="#">Like Us on Facebook</a>
                        </li>
                    </div>
                </div>
                <!-- contact form -->
                <div>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Enter your name"
                            />
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input
                                type="text"
                                name="email"
                                id="email"
                                placeholder="Enter your email"
                            />
                        </div>
                        <div class="form-group">
                  <textarea
                      name="message"
                      id=""
                      cols="30"
                      rows="10"
                      placeholder="Message..."
                  >
                  </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer id="main-footer">
        <div class="container footer-container">
            <div>
                <img src="{{'front/images/mjcover_logo.jpg'}}" alt="mjcovers log" />
                <p>
                    MJ Covers is one of the leading South African company in the sun
                    protection trade. We provide professional services to Agents for
                    Private / Domestic, Commercial, Corporate large and small. Whether
                    you require blinds or awnings for your home or business, we can
                    assist you.
                </p>
            </div>
            <div>
                <h3 class="letter-space">Site Links</h3>
                <div class="list">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#showcase">Showcase</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#">Private Policy</a></li>
                </div>
            </div>
            <div>
                <h3 class="letter-space">Email Newsletter</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
                    aperiam.
                </p>
                <form action="">
                    <input type="email" placeholder="Enter Email" />
                    <input
                        type="submit"
                        value="Subscribe"
                        class="btn btn-secondary"
                    />
                </form>
            </div>

            <div>
                <div class="container">
                    <div id="footer-copyright">
                        <div id="copyright">
                            Copyright &copy; 2022, All Rights Reserved
                        </div>

                        <div id="designer">
                            Designed at
                            <a
                                target="blank"
                                href="https://www.linkedin.com/in/wandumi-munandi-sichali-a83771133/"
                            >MunandiMedia</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
    const menuSwitcher = document.querySelector('#toggleMenuMobile')

    const desktopMenu = document.querySelector('#navMenuDesktop')

    menuSwitcher.addEventListener('click', () => {
        desktopMenu.classList.toggle('active')
    })
</script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<script src="{{'front/scripts/scroll.js'}}"></script>
</body>
</html>
