



 <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                     {{-- Users nav  --}}

                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('users')}}">Users</a>
                    
                        {{-- <a class="nav-link" href="{{route('users')}}">Users</a>

                        <a class="nav-link" href="{{route('posts')}}">Posts</a> --}}

                    </nav>

                </div>

                     {{-- categories nav  --}}

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
                    <div class="sb-nav-link-icon"><i class="fas fa-list-ul"></i></div>
                    Categories
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCategories" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('categories')}}">All Categories</a>
                        <a class="nav-link" href="{{route('categories.create')}}">Create Category</a>

                    


                    </nav>

                </div>

                     {{-- post nav  --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('posts')}}">All Posts</a>
                        <a class="nav-link" href="{{route('posts.create')}}">Create Post</a>

                    


                    </nav>

                </div>



                         {{-- Comments nav  --}}
                         <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseComments" aria-expanded="false" aria-controls="collapseComments">
                            <div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                            Comments
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseComments" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('comments')}}">All Comments</a>
        
                            
        
        
                            </nav>
        
                        </div>


{{-- /////////////////////////////////////////////////////////////////////////////////// --}}








                           <div class="sb-sidenav-menu-heading">Settings</div>
                <a class="nav-link" href="{{route('setting')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                    Settings
                </a>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Blog Dashboard
        </div>
    </nav>
</div>