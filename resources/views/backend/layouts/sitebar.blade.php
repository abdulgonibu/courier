@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp

<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
      
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('users.view')}}" class="nav-link {{ ($route=='users.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View User</p>
                    </a>
                   </li>
                   </ul>
              </li>

          <li class="nav-item has-treeview {{($prefix=='/profile')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profile.view')}}" class="nav-link {{ ($route=='profile.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profile</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{ route('password.view')}}" class="nav-link {{ ($route=='password.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
            </li>


              <li class="nav-item has-treeview {{($prefix=='/logos')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Logo
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('logos.view')}}" class="nav-link {{ ($route=='logos.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Logo</p>
                    </a>
                   </li>
                   </ul>
              </li>

              <li class="nav-item has-treeview {{($prefix=='/headline')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Headline
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('headline.view')}}" class="nav-link {{ ($route=='headline.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Headline</p>
                    </a>
                   </li>
                   </ul>
              </li>

               <li class="nav-item has-treeview {{($prefix=='/sliders')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Slider
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('sliders.view')}}" class="nav-link {{ ($route=='sliders.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Slider</p>
                    </a>
                   </li>
                   </ul>
              </li>

              <li class="nav-item has-treeview {{($prefix=='/missions')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Mission
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('missions.view')}}" class="nav-link {{ ($route=='missions.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Mission</p>
                    </a>
                   </li>
                   </ul>
              </li>
              <li class="nav-item has-treeview {{($prefix=='/vissions')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Vission
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('vissions.view')}}" class="nav-link {{ ($route=='vissions.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Vission</p>
                    </a>
                   </li>
                   </ul>
              </li>
              <li class="nav-item has-treeview {{($prefix=='/news_events')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage News And Event
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('news_events.view')}}" class="nav-link {{ ($route=='news_events.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View News And Event</p>
                    </a>
                   </li>
                   </ul>
              </li>
              <li class="nav-item has-treeview {{($prefix=='/services')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Service
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('services.view')}}" class="nav-link {{ ($route=='services.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Service</p>
                    </a>
                   </li>
                   </ul>
              </li>

              <li class="nav-item has-treeview {{($prefix=='/contacts')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Contact
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('contacts.view')}}" class="nav-link {{ ($route=='contacts.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Contact</p>
                    </a>
                   </li>
                   <li class="nav-item">
                    <a href="{{ route('contacts.communicate')}}" class="nav-link {{ ($route=='contacts.communicate')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Communicate</p>
                    </a>
                   </li>
                   </ul>
              </li>

              <li class="nav-item has-treeview {{($prefix=='/abouts')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage About
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('abouts.view')}}" class="nav-link {{ ($route=='abouts.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View About</p>
                    </a>
                   </li>
                   
                   </ul>
              </li>

              <li class="nav-item has-treeview {{($prefix=='/marchents')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    All Marchent
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('marchents.view')}}" class="nav-link {{ ($route=='marchents.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Marchent</p>
                    </a>
                   </li>
                   <li class="nav-item">
                    <a href="{{ route('marchents.pending')}}" class="nav-link {{ ($route=='marchents.pending')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Marchent Pending List</p>
                    </a>
                   </li>
                   </ul>
              </li>

              <li class="nav-item has-treeview {{($prefix=='/orders')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    All Order
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('orders.view')}}" class="nav-link {{ ($route=='orders.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Order</p>
                    </a>
                   </li>
                   <li class="nav-item">
                    <a href="{{ route('orders.pending')}}" class="nav-link {{ ($route=='orders.pending')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pending Order</p>
                    </a>
                   </li>
                   </ul>
              </li>


            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>