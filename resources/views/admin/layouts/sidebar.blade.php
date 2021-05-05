<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" style="margin-top: 50px">
            <li class="{{ Request::route()->getName() ==  'admin' ? 'active' : '' }}">
                <a href="{{route('admin')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::route()->getName() ==  'head-part' ? 'active' : '' }}">
                <a href="{{route('head-part')}}">
                    <i class="fa fa-bookmark"></i> <span>Heading section</span>
                </a>
            </li>

            <li class="{{ Request::route()->getName() ==  'principle' ? 'active' : '' }}">
                <a href="{{route('principle')}}">
                    <i class="fa fa-gear"></i> <span>Principle</span>
                </a>
            </li>

            <li class="{{ Request::route()->getName() ==  'product' ? 'active' : '' }}">
                <a href="{{route('product')}}">
                    <i class="fa fa-file"></i> <span>Our Product</span>
                </a>
            </li>

            <li class="{{ Request::route()->getName() ==  'image' ? 'active' : '' }}">
                <a href="{{route('image')}}">
                    <i class="fa fa-list"></i> <span>Product Images</span>
                </a>
            </li>

            <li class="{{ (Request::route()->getName() ==  'advantages' ||  Request::route()->getName() ==  'add-advantage' ||  Request::route()->getName() ==  'update-adv') ? 'active' : '' }}">
                <a href="{{route('advantages')}}">
                    <i class="fa fa-pencil"></i> <span>Advantages</span>
                </a>
            </li>

            <li class="{{ (Request::route()->getName() ==  'messages') ? 'active' : '' }}">
                <a href="{{route('messages')}}">
                    <i class="fa fa-envelope"></i> <span>Messages</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
