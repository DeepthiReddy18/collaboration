
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light newnavcls">
    <div class="container-fluid dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo URLROOT.'/users/login';?>">Home</a>
                </li>
            </ul>
            <form class="d-flex"> 
                <a class="btn btn primary" role="button" href="<?php echo URLROOT.'/users/Register';?>">Sign up</a>
            </form>
        </div>
    </div>
</nav>

<!--css-->
<style>
    .newnavcls{
        background-color: #198754 !important;
        height:55px;
        color:#fff; 
    }

    .container-fluid{
        height:55px;
        background-color:#198754;
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

    .navbar-nav {
        --bs-nav-link-padding-x: 0rem;
        --bs-nav-link-padding-y: 1.0rem;
    }

    .navbar-nav {
        --bs-nav-link-padding-x: 0;
        --bs-nav-link-padding-y: 1.0rem;
}

    .navbar-nav> li{  
        width:160px;         
    }

    .nav-link{
        display:flex;     
    }
    
    .nav-item>a{
        display:block;
        color:#fff;                       
    }

    .nav-item>a:hover{
        background-color:#141414;
        color:#fff;
        text-decoration:none;           
    }

    #navbarDropdown>a{
        text-decoration:none; 
        color:#fff;
    }

    .navbar-nav .show >.nav-link {
        text-decoration:none; 
        color:#fff;
    }

    ul.dropdown-menu.show{
        float:left;
        width:160px;
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

    form.d-flex{
        margin-right:15px;          
    }

    form.d-flex>a:hover{
        color:#fff;      
        background-color: #141414;
    }

    form.d-flex>a{
        color:#fff;      
        background-color: #141414;  
        border:none; 
    }

</style>