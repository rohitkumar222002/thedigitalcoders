
<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li>
                            <a href="{{route('dashboard')}}">
                                <i class="fas fa-chart-bar"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Category</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('categories.create')}}">Add Category</a>
                                </li>
                                <li>
                                    <a href="{{route('categories.index')}}">Category list</a>
                                </li>  
                             
                             
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Subcategory</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('subcategories.create')}}">Add Subcategory</a>
                                </li>
                                <li>
                                    <a href="{{route('subcategories.index')}}">Subcategory list</a>
                                </li>  
                                
                             
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Courses</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('courses.create')}}">Add Courses</a>
                                </li>
                                <li>
                                    <a href="{{route('courses.index')}}">Courses list</a>
                                </li>  
                                
                             
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Blogs</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('blogs.index')}}">Add Blog</a>
                                </li>
                                <li>
                                    <a href="{{route('blogs.create')}}">Blog list</a>
                                </li>  
                                
                             
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Testimonial</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('testimonials.create')}}">Add Testimonials</a>
                                </li>
                                <li>
                                    <a href="{{route('testimonials.index')}}">Testimonials list</a>
                                </li>  
                                
                             
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>About Us</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('aboutus.create')}}">Add About</a>
                                </li>
                                <li>
                                    <a href="{{route('aboutus.index')}}">About list</a>
                                </li>  
                                
                             
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>