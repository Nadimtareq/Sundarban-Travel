<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="71"/>
                <img class="logo_light" src="assets/img/logo_main_white.png" alt="" height="15" width="71"/>
            </a>
            <a href="index.html" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                <img class="logo_light" src="assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
            </a>
        </div>

    </div>

    
   <div class="menu_section">
            <ul>
                <li class="current_section" title="Dashboard">
                    <a href="">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                    
                </li>
                <li title="">
                    <a href="{{route('basicinfo_create')}}">
                        <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                        <span class="menu_title">Basic information</span>
                    </a>
                    
                </li>
                <li title="Invoices">
                    <a href="">
                        <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                        <span class="menu_title">Common Package</span>
                    </a>
                    <ul>
                        <li><a href="{{route('commonpack')}}">Category</a></li>
                       <li><a href="{{route('commonpackge')}}">Package</a></li>
                    </ul>
                </li>
                <li title="Chat">
                    <a href="">
                        <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                        <span class="menu_title">Group Fare</span>
                    </a>
                    <ul>
                    
                         <li><a href="{{route('groupfare/cat')}}">Category</a></li>
                       <li><a href="{{route('groupfare')}}">Package</a></li>

                    </ul>
                    
                </li>
                <li title="Scrum Board">
                    <a href=" ">
                        <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                        <span class="menu_title">Special Package</span>
                         </a>
                        <ul>
                        <li><a href="{{route('package')}}">Package</a></li>
                       <li><a href="{{route('assign')}}">Assign To usser</a></li>
                    </ul>
                              
                </li>
                <li title="Snippets">
                    <a href="">
                        <span class="menu_icon"><i class="material-icons">&#xE86F;</i></span>
                        <span class="menu_title">Users</span>
                        </a>
                        <ul>
                        <li><a href="{{route('pending')}}">Pending</a></li>
                        <li><a href="{{route('confirmed')}}">Confirmed</a></li>
                    </ul>
                    
                    
                </li>
                <li title="User Profile">
                    <a href="page_user_profile.html">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Order</span>
                    </a>
                    
                </li>
                <li title="Forms">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                        <span class="menu_title">Gallery </span>
                    </a>
                    
                
                </li>
                <li title="Layout">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                        <span class="menu_title">Feedback</span>
                    </a>
                    <ul>
                        <li><a href="layout_top_menu.html">Top Menu</a></li>
                        <li><a href="layout_header_full.html">Full Header</a></li>
                    </ul>
                
                </li>
                
                
                <li title="E-commerce">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8CB;</i></span>
                        <span class="menu_title">E-commerce</span>
                    </a>
                    <ul>
                        <li><a href="ecommerce_product_details.html">Product Details</a></li>
                        <li><a href="ecommerce_product_edit.html">Product Edit</a></li>
                        <li><a href="ecommerce_products_grid.html">Products Grid</a></li>
                        <li><a href="ecommerce_products_list.html">Products List</a></li>
                    </ul>
                
                </li>
                
                <li title="Pages">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE24D;</i></span>
                        <span class="menu_title">Pages</span>
                    </a>
                    <ul>
                        <li><a href="page_blank.html">Blank</a></li>
                        
                            </ul>
                
                </li>
                
                <li>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE241;</i></span>
                        <span class="menu_title">Multi level</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">First level</a>
                            <ul>
                                <li>
                                    <a href="#">Second Level</a>
                                    <ul>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Long title to test</a>
                                    <ul>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Even longer title multi line</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
</aside><!-- main sidebar end -->