<?php /* Smarty version Smarty-3.1.13, created on 2013-05-05 16:08:29
         compiled from "application\view\Visa_Working_Permit.php" */ ?>
<?php /*%%SmartyHeaderCode:50135186665ec4d2f4-24592090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c3b99782150b67b51fe049e9cf64ee2ddfd7fd9' => 
    array (
      0 => 'application\\view\\Visa_Working_Permit.php',
      1 => 1367762903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50135186665ec4d2f4-24592090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5186665ed9ef79_80916818',
  'variables' => 
  array (
    'css' => 0,
    'javascript' => 0,
    'base_url' => 0,
    'image' => 0,
    'services' => 0,
    'categories' => 0,
    'subcategories' => 0,
    'contact_company_name' => 0,
    'contact_address' => 0,
    'contact_email' => 0,
    'contact_contacts' => 0,
    'contact' => 0,
    'display_text' => 0,
    'content' => 0,
    'load_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5186665ed9ef79_80916818')) {function content_5186665ed9ef79_80916818($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JCABookkeeping Services</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/style.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/contact_widget.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/contactUs.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/slide.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            slider('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
');
        });
    </script>
</head>

<body>
<div class="topWrap">
	<div class="topColumn">
    	<div class="logo">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/logo.png" />
            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/jca_logo2.jpg" />
        </div><!--End of logo-->
        <div class="searchBar">
            <p>Searching....</p>
        </div><!--End of searhBar-->
    </div><!--End of topColumn-->
</div><!--End of topWrap-->
<!-- ------------------------------------------------------------------------------- -->
<div class="menuWrap">
    <div class="homeMenu">        
        <div class="menuSide">
            <ul class="ul">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>                
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/services">Services</a></li>
                <li class="menu_selected"><a href="#">About Us</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/clients">Clients</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/ContactUs">Contact Us</a></li>            
            </ul>
        </div><!--closing for menuSide-->
    </div><!--closing for homeMenu-->
</div><!--End of menuWrap-->
<!-- ------------------------------------------------------------------------------- -->
<div class="animationWrap">
	<div class="animation">
		<div class="pic_container"></div>
        <div class="banner_loader"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/loader-green.gif"></div>
    </div><!--End of animation-->
</div><!--End of animationWrap-->
<!-- ------------------------------------------------------------------------------- -->
<div class="bodyWrap">
	
    <div class="page02Body">
      <div class="page02ColumnOne">
        <ul class="verticalMenu">
          <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value){
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                <li class="verticalMenuTitle" id="<?php echo ('cat_').($_smarty_tpl->tpl_vars['categories']->value['cat_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_name'];?>
</li>

                <?php  $_smarty_tpl->tpl_vars['subcategories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value['subcat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategories']->key => $_smarty_tpl->tpl_vars['subcategories']->value){
$_smarty_tpl->tpl_vars['subcategories']->_loop = true;
?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['subcategories']->value['subcat_name']=='Visas & Work Permit'){?>category_selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/service?cat_id=<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_id'];?>
&subcat_id=<?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_id'];?>
" id="subcat_<?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_name'];?>
</a></li>
                <?php } ?>
            <?php } ?>                      
        </ul>
        <!--contact widget-->
        <ul class="verticalMenu contact_widget">
            <li class="verticalMenuTitle">Contact Us</li>
            <li>
                <div class="company_name"><?php echo $_smarty_tpl->tpl_vars['contact_company_name']->value;?>
</div>
                <p class="address"><?php echo $_smarty_tpl->tpl_vars['contact_address']->value;?>
</p>
                <p class="mail contacts">
                    <strong>Mail:</strong>  <br/>
                    <span class="contact_row"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
</a></span>  <br/>
                    <span class="contact_row"><a href="mailto:jcabs2007@gmail.com">jcabs2007@gmail.com</a></span>
                </p>
                <p class="contacts">
                    <strong>Contacts:</strong> <br/>
                    <?php $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['contact']->step = 1;$_smarty_tpl->tpl_vars['contact']->total = (int)ceil(($_smarty_tpl->tpl_vars['contact']->step > 0 ? count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['contact']->step));
if ($_smarty_tpl->tpl_vars['contact']->total > 0){
for ($_smarty_tpl->tpl_vars['contact']->value = 0, $_smarty_tpl->tpl_vars['contact']->iteration = 1;$_smarty_tpl->tpl_vars['contact']->iteration <= $_smarty_tpl->tpl_vars['contact']->total;$_smarty_tpl->tpl_vars['contact']->value += $_smarty_tpl->tpl_vars['contact']->step, $_smarty_tpl->tpl_vars['contact']->iteration++){
$_smarty_tpl->tpl_vars['contact']->first = $_smarty_tpl->tpl_vars['contact']->iteration == 1;$_smarty_tpl->tpl_vars['contact']->last = $_smarty_tpl->tpl_vars['contact']->iteration == $_smarty_tpl->tpl_vars['contact']->total;?>
                        <span class="contact_row"><?php echo $_smarty_tpl->tpl_vars['contact_contacts']->value[$_smarty_tpl->tpl_vars['contact']->value];?>
</span> <br/>
                    <?php }} ?>
                </p>
            </li>                      
        </ul>
        <!--end contact widget-->
      </div><!--End of page02ColumnWrap-->
        <div class="page02ColumnTwo">
            <div class="aboutUs">
                <div class="aboutUsTile"><h2><?php echo $_smarty_tpl->tpl_vars['display_text']->value;?>
</h2></div>
                <p class="aboutUsBody"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
            </div><!--End of aboutUs-->
            <div class="clearfix" style="clear:both;"></div><!--End of clearfix-->  
            <div class="contactUsMapWrapper">
                <div class="contactUsMapTitle" style="border-bottom:0px; border-top: 1px dotted #ccc;margin-top: 20px;">
                    Contact JCA Bookkeeping Services
                </div><!--End of contactUsMapTitle-->
                <?php echo $_smarty_tpl->tpl_vars['load_errors']->value;?>

                <div class="contactUsDataText">
                    <form method="POST">
                        <p class="no">Firstname:</p>
                        <p class="no"><input class="inputbox" type="text" name="firstname"></p>
                        <p class="no">Lastname:</p>
                        <p class="no"><input class="inputbox" type="text" name="lastname"></p>
                        <p class="no">Address:</p>
                        <p class="no"><input class="inputbox" type="text" name="address"></p>
                        <p class="no">Email:</p>
                        <p class="no"><input class="inputbox" type="text" name="email"></p>
                        <p class="no">Phone:</p>
                        <p class="no"><input class="inputbox" type="text" name="phone"></p>
                        <p class="no">Company:</p>
                        <p class="no"><input class="inputbox" type="text" name="company"></p>
                        <p class="no">Message:</p>
                        <p class="no"><textarea class="textArea" name="message"></textarea></p>  
                        <input type="hidden" name="subject" value="JCA User Inquiry"/>                                                                 
                        <p class="no"><input class="subButton" type="submit" name="Contact" value="Contact Us"></p> 
                    </form>
                </div><!--End of contactUsDataText-->
            </div><!--End of contactUsMapWrapper-->
        </div><!--End of page02ColumnTwo-->
        <div class="clearfix" style="clear:both;"></div><!--End of clearfix-->    
    </div><!--End of page02Body-->


    <div class="ourPartners">
    	<div class="title"><h3>Our Partners</h3></div>
        <div class="partnersBox1">
            <p><a href="#">Employment Visa Philippines</a></p>
            <p><a href="#">Work Visa Philippines</a></p>
            <p><a href="#">AVEG Visa Philippines</a></p>
            <p><a href="#">Visa Consulting Philippines</a></p>
        </div>
        <div class="partnersBox1">
            <p><a href="#">Employment Visa Philippines</a></p>
            <p><a href="#">Work Visa Philippines</a></p>
            <p><a href="#">AVEG Visa Philippines</a></p>
            <p><a href="#">Visa Consulting Philippines</a></p>      
        </div>
        <div class="partnersBox1">
            <p><a href="#">Employment Visa Philippines</a></p>
            <p><a href="#">Work Visa Philippines</a></p>
            <p><a href="#">AVEG Visa Philippines</a></p>
            <p><a href="#">Visa Consulting Philippines</a></p>        
        </div>
        <div class="partnersBox1">
            <p><a href="#">Employment Visa Philippines</a></p>
            <p><a href="#">Work Visa Philippines</a></p>
            <p><a href="#">AVEG Visa Philippines</a></p>
            <p><a href="#">Visa Consulting Philippines</a></p>       
        </div><!--End of partnersBox1-4 --> 
        <div class="clearfix" style="clear:both"></div>                       
    </div><!--End of ourPartners-->
</div><!--End of bodyWrap-->
<div class="footer">

</div><!--End of footer-->
<div class="copyrights">
    <p>All Rights Reserved JCA Bookkeeping Services 2013</p>
</div><!--End of copyrights-->
</body>
</html>
<?php }} ?>