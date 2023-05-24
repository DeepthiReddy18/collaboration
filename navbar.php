
<style>
    .newnavcls{
        background-color: #198754 !important;
        height:55px;
        color:#fff;
    }

    .container-fluid{
        height:55px;
        padding-left:2px;
        padding-right:2px;
    }

    .container-fluid{
        --bs-gutter-x: 0rem;
        --bs-gutter-y: 0;
    }

    .collapse ul{   
        width:650px;
        text-align:center;
    }

    ul.navbar-nav{
        margin-left:400px;
    }

    .navbar-nav {
        --bs-nav-link-padding-x: 0rem;
        --bs-nav-link-padding-y: 1.0rem;
    }

    li.nav-item{  
        width:160px;         
    }

    .nav-link{
        display:flex;     
    }
    
    .nav-item>a{
        display:block;
        color:#fff;                       
    }

    .navbar-nav.me-auto.mb-2.mb-lg-0>.nav-item>a:hover{
        background-color:#141414;
        color:#fff;
        text-decoration:none;           
    }

    #navbarDropdown>a{
        text-decoration:none; 
        color:#fff;
    }

    .navbar-nav.show >.nav-link {
        text-decoration:none; 
        color:#fff;
    }

    ul.dropdown-menu.show{
        float:left;
        width:100px;
        color:#fff;
        text-decoration:none;
    }

    .dropdown-menu {
        position: absolute;
        min-width: 160px;
    }

    .nav-item{
        width:30px;    
    }


    

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light newnavcls">
    <div class="container-fluid dark">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo URLROOT.'/users/dashboard';?>">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blogs</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo URLROOT.'/users/categories';?>">Categories</a></li>
                        <li><a class="dropdown-item" href="#">CSE</a></li>
                        <li><a class="dropdown-item" href="#">ECE</a></li>
                    </ul>     
                </li>
                
                <?php 
                if(isset($_SESSION['email']) && $_SESSION['email'] =='bhima@gmail.com'){ ?>
                    <li class="nav-item">                 
                        <a class="nav-link" href="<?php echo URLROOT.'/users/uae';?>">Users</a>
                    </li>
                <?php }?>         
            </ul>

            <ul class="navbar-nav ms-auto profile-menu">
                <li class="nav-item msg">
                    <a class="nav-link" href="#"><?php if(isset($_SESSION['firstname'])) {echo $_SESSION['firstname'];}?></a>
                </li>         
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"><?php if(isset($_SESSION['rolename'])) {echo $_SESSION['rolename'];}?>:<?php if(isset($_SESSION['firstname'])) {echo $_SESSION['firstname'];}?></a></li>
                        <!-- <li><hr class="dropdown-divider"></li> 
                        <li><a class="dropdown-item" href="<1?php echo URLROOT; ?>/users/profile"><i class="fas fa-sliders-h fa-fw"></i>Profile</a></li> --> 
                        <!-- <li><hr class="dropdown-divider"></li> --> 
                        <li><a class="dropdown-item" href="<?php echo URLROOT.'/users/login';?>"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
      
            

        </div>
    </div>
</nav>

 
        
        
        
        
        
       