<div id='header_wrapper'>
    <div id='head_wrapper_left'>
        <a href='/jaar%202/Laravel/project_A/MPA/public/'>home</a>
        <a>about</a>
        <a href='{{Route("product.all")}}'>products</a>
        <a href='{{Route("category.all")}}'>categories</a>
    </div>
    <div id='head_wrapper_center'>
        <img id='header_logo' alt='company logo' src='../images/logo/logo_plain.png'/>
    </div>
        
    <div id='head_wrapper_right'>
        <a onclick='switchTheme()' class="btn2 btn-animation-four" id='themeSwitchButton' data-sm-link-text="Lightmode" target="_blank"><span>Mode</span></a>
        <a>cart (0)</a>
        <a>account</a>
    </div>
</div>