<?php $this->load->view('includes/loginModal');?>
<ul class="menu_new">
    <li><a href="#">Home</a></li>
    <li><a href="#s1">Menu 1</a>
        <ul class="submenu">
            <li><a href="#">Submenu a</a></li>
            <li><a href="#">Submenu b</a></li>
            <li><a href="#">Submenu c</a></li>
            <li><a href="#">Submenu d</a></li>
            <li><a href="#">Submenu e</a></li>
            <li><a href="#">Submenu f</a></li>
            <li><a href="#">Submenu g</a></li>
            <li><a href="#">Submenu h</a></li>
        </ul>
    </li>
    <li class="active"><a href="#s2">Menu 2</a>
        <ul class="submenu">
            <li><a href="#">Submenu a</a></li>
            <li><a href="#">Submenu b</a></li>
            <li><a href="#">Submenu c</a></li>
            <li><a href="#">Submenu d</a></li>
            <li><a href="#">Submenu e</a></li>
            <li><a href="#">Submenu f</a></li>
            <li><a href="#">Submenu g</a></li>
            <li><a href="#">Submenu h</a></li>
        </ul>
    </li>
    <li><a href="#">Menu 3</a>
        <ul class="submenu">
            <li><a href="#">Submenu a</a></li>
            <li><a href="#">Submenu b</a></li>
            <li><a href="#">Submenu c</a></li>
            <li><a href="#">Submenu d</a></li>
            <li><a href="#">Submenu e</a></li>
            <li><a href="#">Submenu f</a></li>
            <li><a href="#">Submenu g</a></li>
            <li><a href="#">Submenu h</a></li>
        </ul>
    </li>
    <li><a href="#">Menu 4</a></li>
    <li style="float: right;"><a id="myModal" onclick="myFunction()" data-target="#myModal">Sign Up</a></li>
</ul>

<script type="text/javascript">
    function myFunction() {
        $('#myModal').modal('show');
    }

//
</script>