<?php
/* Smarty version 4.1.0, created on 2023-01-10 21:59:19
  from 'D:\xampp\htdocs\korni-master\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bdd1a78f31b2_85517694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84d492d79c88093a7f3011cb9e446e17ad880993' => 
    array (
      0 => 'D:\\xampp\\htdocs\\korni-master\\app\\views\\templates\\main.tpl',
      1 => 1673384044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bdd1a78f31b2_85517694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/style.css">
</head>

<body>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/main.js"><?php echo '</script'; ?>
>
    <header>
        <div class="header-wrap">
            <div class="logo-wrap">
                <img src="#" />
                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/">Nazwa Here</a></h1>
            </div>
        </div>
    </header>
    <div class="main-wrap">
        <div class="content-wrap">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106725767863bdd1a78ecfc8_34127426', 'content');
?>

        </div>
        <nav class="sidebar-wrap">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/katalog">Katalog</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/vouchery">Vouchery</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/koszyk">Koszyk</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/kontakt">Kontakt</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/about">O nas</a>
            <?php if (\core\RoleUtils::inRole('loggedIn')) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/wyloguj">Wyloguj si??</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacje">Moje rezerwacje</a>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/logowanie">Zaloguj si??</a>
            <?php }?>
        </nav>
    </div>
    <footer>
        <h3>Footer</h3>
    </footer>
</body>

</html><?php }
/* {block 'content'} */
class Block_106725767863bdd1a78ecfc8_34127426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106725767863bdd1a78ecfc8_34127426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
