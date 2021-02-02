<nav class="navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1> <a class="navbar-brand" href="#">RAH</a></h1>
    </div>

    <div class=" border-bottom">



        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        @include('layout.header')
        <div class="clearfix">

        </div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="#" class=" hvr-bounce-to-right">
                            <i class="fa fa-home nav_icon "></i><span class="nav-label">Polos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right">
                            <i class="fa fa-money nav_icon "></i><span class="nav-label">Economia</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right">
                            <i class="fa fa-heart nav_icon "></i><span class="nav-label">Alimentação</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
</nav>
