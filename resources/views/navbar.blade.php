<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngoding Bareng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand fixed-top bg-body-tertiary shadow" id="nav">
        <div class="brand">
            ngoding-bareng
        </div>
        <div class="container-fluid justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Course</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Article</a>
                </li>
            </ul>
            <div class="image-container">
                <a href="">
                    <img src="{{ asset('images/ryan-gosling.jpg') }}" alt="">
                </a>
            </div>
            <div class="dropdown">
                <a class="navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i class=" fa-solid fa-bars fa-2xl"></i></a>
                <div class="dropdown-menu dropdown-menu-end mt-4">
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <i class="fa-solid fa-gear fa-lg"></i> 
                        <span class="ms-3">Setting</span>
                    </a>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <i class="fa-solid fa-cart-shopping fa-lg"></i>
                        <span class="ms-3">My Cart</span>
                    </a>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <i class="fa-regular fa-circle-question fa-lg"></i>
                        <span class="ms-3">Help</span>
                    </a>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                        <span class="ms-3">Log out</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar fixed-top bg-body-tertiary shadow" id="offcanvas">
        <div class="container-fluid">
           <div class="brand">
            ngoding-bareng
           </div>
            <button class=" custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars fa-2xl"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="image-container ps-3">
                    <a href="">
                        <img src="{{ asset('images/ryan-gosling.jpg') }}" alt="">
                    </a>
                    <div class="side-text">
                        <span class="fw-bold">Hi, Ryan Gosling</span>
                        <span id="message">Welcome back</span>
                    </div>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a href="" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Course</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Article</a>
                        </li>
                    </ul>
                    <hr>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <i class="fa-solid fa-gear fa-lg"></i> 
                        <span class="ms-3">Setting</span>
                    </a>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <i class="fa-solid fa-cart-shopping fa-lg"></i>
                        <span class="ms-3">My Cart</span>
                    </a>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <i class="fa-regular fa-circle-question fa-lg"></i>
                        <span class="ms-3">Help</span>
                    </a>
                    <a href="" class="dropdown-item pe-5 pt-1">
                        <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                        <span class="ms-3">Log out</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum in, delectus sapiente consequatur dolore nulla
        repellendus ipsam exercitationem impedit. Esse reiciendis deserunt harum ad dolorum rerum cupiditate veniam quam
        velit?
        Tempora recusandae optio animi esse provident libero doloremque, quas fugiat distinctio reprehenderit expedita
        veritatis tempore eligendi ea labore, officia unde. Quasi atque quam sequi nisi voluptatibus sed tempore fugit
        voluptas?
        Beatae, fugiat quaerat adipisci quisquam delectus voluptatum quibusdam, ex tempora odit, excepturi recusandae
        quam ad consequuntur magni non quis? Cupiditate iste officia quasi tenetur aliquam vitae, officiis repellat ab.
        Soluta?
        Distinctio itaque reiciendis excepturi repellat molestiae iste aperiam doloribus voluptatem in maiores!
        Quisquam, praesentium fuga. Ex quis blanditiis unde! Nulla, amet fugiat suscipit aliquam architecto nisi
        assumenda officia neque omnis!
        Vitae architecto nostrum enim voluptate! Officia perferendis distinctio qui amet dolorum at maiores debitis
        perspiciatis consequuntur soluta, ullam repellat assumenda nostrum accusamus necessitatibus sed et facere quidem
        illum deleniti officiis.
        Perspiciatis esse totam saepe natus aut nemo, cum cupiditate laboriosam corporis, itaque ipsam obcaecati quasi
        et dolorem dolorum quae, quaerat maxime. Quae eveniet laboriosam vero neque facere nihil odit dolorum!
        Nihil atque consectetur, numquam architecto possimus asperiores natus esse molestiae neque, quae modi fuga
        eligendi ratione itaque nam deserunt, placeat veniam eveniet doloremque tenetur sapiente minima cupiditate
        dolorum. Repellendus, eveniet.
        Modi harum sequi ullam iure aliquid quas recusandae distinctio. Ratione sed nam nihil non? Temporibus deserunt
        dignissimos magnam, cupiditate animi fugit maiores obcaecati voluptatum sed iure, minima, quasi soluta id.
        Voluptates iusto possimus veritatis optio facere quo? Voluptatem tempore itaque, ab, non consequuntur quaerat
        dolores similique, cum laborum recusandae ratione quidem illo accusamus mollitia deleniti nesciunt dolore autem
        ipsam reprehenderit?
        Neque eius autem eos nesciunt distinctio excepturi animi maiores obcaecati iure? Architecto aperiam qui
        consequuntur! Blanditiis minima nobis asperiores quidem dolor non error! Officia, molestias. Ducimus harum
        fugiat mollitia molestias.
        Commodi laborum eum ad, rem temporibus soluta culpa magni veritatis sunt mollitia, est distinctio necessitatibus
        blanditiis perferendis quia beatae eius impedit amet sit, porro rerum odio. Modi necessitatibus beatae
        asperiores.
        Nulla, fugit, numquam aliquam consequatur pariatur exercitationem blanditiis architecto atque esse ullam, autem
        reiciendis expedita eos? Quo ipsa distinctio omnis nihil nobis nulla sapiente possimus harum saepe, reiciendis
        accusantium eligendi?
        Eligendi laborum totam laudantium quibusdam numquam perferendis aspernatur assumenda iusto corporis unde
        accusantium earum, eius recusandae, culpa, sapiente itaque rerum molestias consequuntur quisquam eaque repellat
        cum possimus quo quam! Doloribus!
        Quidem officiis dicta quo, officia, obcaecati, repudiandae debitis error ipsa atque et alias tempora sapiente
        molestiae dolor placeat ratione omnis laboriosam incidunt. Maiores architecto laborum sequi delectus, impedit
        hic temporibus?
        Optio ducimus aliquam at harum et necessitatibus, neque non praesentium tempore laudantium ratione labore quas
        natus odio culpa, quis ipsam ad, ab nulla. Non mollitia ut animi soluta aperiam numquam.
        Asperiores accusamus vitae ea. Dicta, a quo. Sed delectus magnam, ipsam ad itaque dolore, labore veritatis
        distinctio pariatur provident veniam repellat ex amet. Nisi, nesciunt inventore! Eligendi aliquam eius labore?
        Pariatur possimus repellat beatae natus! Alias, accusantium enim magni neque fugit pariatur quasi nesciunt
        deleniti rem voluptates reiciendis est, et adipisci totam animi. Quam nisi cum molestias molestiae est earum.
        Fugiat quam quidem in atque dolores molestias molestiae! Temporibus placeat cum cupiditate modi quae, maxime
        soluta molestias suscipit provident magni architecto asperiores consequatur atque, sunt tempore cumque ullam
        minus distinctio.
        Nulla nam libero error aut dolorem repellat minima quod odit earum quibusdam enim, illo excepturi cumque animi
        reiciendis, inventore veniam ea, eos nihil. Animi omnis ab, aut alias reprehenderit atque?
        Sint veniam minima voluptate minus dignissimos libero. Recusandae vitae quaerat maiores repudiandae voluptate
        tempora, incidunt ipsam corporis sint facilis porro vel, eos aliquid. Ducimus voluptatum animi sit odio quo
        beatae!
    </div>
    <section class="section-footer text-center">
        <div class="py-4 m-0">
            <h3>ngoding-bareng</h3>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
