<?php
// source: E:\xamp\htdocs\azulgarweb\app\presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Templatebc819a6dc6 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'content' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		$this->renderBlock('scripts', get_defined_vars());
?>


<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<body>
<!-- MENU -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Legends of Azulgar</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Homepage</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Lore</a></li>
                <li><a href="#">Media</a></li> 
                <li><a href="#">Roadmap</a></li> 
                <li><a href="#">Community</a></li>
                <li><a href="#">Store</a></li> 
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>	
            </ul>     
        </div>
    </nav>
<!-- CONTENT -->
    <div class="container-fluid" id="content">
        <div class="row" >
            <div class="content pagination-centered">
                <div class="col-sm-10" style="align-text: center;"> 
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut interdum velit. Fusce tempor dignissim augue ut pretium. Duis lacinia venenatis eros, eu aliquam tortor tincidunt vel. In placerat nec lectus eget rhoncus. Vivamus sit amet augue ornare tellus volutpat semper. Nunc molestie tellus ut diam porta tincidunt. Morbi sit amet varius urna, at egestas est. Quisque eget orci congue, maximus erat sit amet, vehicula diam. Nulla eget arcu ut enim sagittis sollicitudin eu at lorem. Sed laoreet dolor in urna varius tincidunt. Nullam fringilla placerat felis sit amet molestie. Maecenas a tortor eu sapien varius luctus eu in felis. Praesent blandit erat neque, in semper quam ullamcorper at. In hac habitasse platea dictumst. Curabitur eu semper urna.
                        Curabitur a nulla sed nibh tincidunt laoreet ac quis dolor. Sed venenatis diam sem, eget ultricies eros tempor sit amet. Suspendisse vel tincidunt dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla dictum convallis placerat. Duis ullamcorper velit imperdiet mauris porta tincidunt. Fusce turpis libero, mollis quis accumsan at, ornare non felis. Duis justo augue, facilisis vitae ultrices sed, auctor id tellus. Pellentesque et tincidunt purus, eget commodo quam. Vestibulum facilisis felis at nibh sagittis porttitor. Praesent sed velit varius, porttitor justo in, scelerisque leo. Donec molestie eros at mi viverra ultrices.
                        Nam sollicitudin tincidunt nulla ac scelerisque. Morbi eget condimentum sem. Sed eros ligula, gravida sed viverra eu, cursus a massa. Duis egestas eros at imperdiet hendrerit. Donec id vulputate lectus. Nunc nec nibh at arcu eleifend scelerisque. Mauris pharetra in tortor eu eleifend. Integer sit amet accumsan ex, in mattis quam. In bibendum, felis eget pretium congue, lacus lacus consequat nisl, vel luctus enim nibh quis urna.
                        Donec vel bibendum eros, eget iaculis lorem. Maecenas quis efficitur felis, ut cursus velit. Donec turpis risus, luctus at lobortis ut, dapibus eu massa. Etiam in varius tortor. Mauris non tempus sem, ut elementum quam. Nam magna odio, sollicitudin ac tortor at, iaculis lacinia ante. Mauris at nulla vitae nisi vulputate ornare lobortis ut augue. Aenean sapien dui, tincidunt vel sodales vel, placerat et enim. Ut pellentesque bibendum elit. Nunc condimentum vulputate orci et interdum. Sed nec nunc aliquam, tristique velit ac, lacinia urna. Nullam quis accumsan lectus. Nunc et elit pellentesque, rhoncus libero non, accumsan quam.
                        Fusce sit amet scelerisque arcu. Nulla bibendum metus vel dolor euismod, at aliquam mi congue. Ut eget pulvinar felis. Quisque id sem sed arcu laoreet feugiat ac id leo. Pellentesque venenatis nisi ut lacus lacinia, sit amet sollicitudin nibh rutrum. Fusce non velit sed quam pellentesque posuere. Aenean sit amet ullamcorper massa. Vestibulum in elit sollicitudin, ornare quam sit amet, posuere sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum id velit nec justo interdum blandit nec in nisi. Phasellus ultricies tincidunt mauris, vitae vehicula est efficitur et. Nam lobortis, neque et congue porta, ex risus aliquam mauris, et ultricies nibh est nec sem. Sed posuere, ligula quis ornare dapibus, lacus justo viverra quam, non facilisis nunc ipsum ut tortor.
                        Maecenas vel nisi tempus, porttitor nisl vitae, lacinia sapien. Pellentesque sit amet nisi sit amet mauris ultrices feugiat. Ut ornare ante eget tortor ullamcorper, a tempor justo pharetra. Praesent nec mattis erat, vitae fringilla lacus. Sed aliquet erat ac est tincidunt sollicitudin. Quisque hendrerit, eros nec commodo pretium, neque odio aliquam enim, eget iaculis elit tellus at tortor. Ut placerat ac ligula sed ornare. Duis venenatis dolor et dui interdum dignissim. Donec cursus tortor eget efficitur commodo. Nullam auctor, metus ac gravida facilisis, orci sem elementum tortor, at feugiat magna mi non nisl. Maecenas eu tellus id urna tempus molestie.
                        In id sapien ut sapien dictum pulvinar egestas luctus eros. Maecenas ullamcorper posuere odio, vel aliquam diam lobortis eu. Sed eu sapien et magna varius mollis sit amet eget est. Mauris enim diam, feugiat interdum leo in, egestas posuere turpis. Nunc mattis, ipsum et aliquam tristique, orci sapien viverra lacus, eu venenatis justo orci id magna. Aenean sed posuere lectus. Cras nec nibh a nulla viverra blandit. Proin in quam consequat enim convallis rhoncus. Proin augue nibh, aliquam at dictum facilisis, volutpat eget enim. Mauris vestibulum interdum tortor, nec tristique leo tempor id. Ut finibus porttitor pharetra. Sed quam mauris, tincidunt non aliquet sed, ultrices in nulla. Quisque volutpat tristique purus. Suspendisse vel purus sed ligula tempor faucibus.
                        Sed pellentesque tincidunt nisi, sodales rhoncus nisl condimentum pellentesque. Pellentesque ultricies ullamcorper laoreet. Sed pharetra tellus dui, nec posuere libero tincidunt non. Praesent ut consequat leo. Vestibulum elementum, lectus at convallis vestibulum, ante felis tincidunt magna, a imperdiet urna felis eu ante. Praesent sed fermentum ipsum. Suspendisse sed neque leo. Curabitur viverra dui in risus pulvinar imperdiet. Donec sed tellus sed arcu auctor feugiat pulvinar ultrices augue.
                        Fusce mi justo, gravida at maximus vel, posuere ac ex. Fusce euismod neque eleifend metus condimentum tincidunt. Donec suscipit mi odio, egestas tempor ligula aliquet eget. Sed et lobortis magna. Pellentesque a sapien enim. Duis libero risus, condimentum vel felis at, suscipit consectetur lorem. Nullam lacinia varius mauris id elementum. Morbi fermentum sodales metus, et placerat tellus malesuada non. Vestibulum eleifend augue in iaculis consequat. Mauris rhoncus, nunc ac luctus vestibulum, enim massa placerat turpis, a hendrerit metus justo non ipsum. Aliquam dignissim hendrerit velit, sit amet fermentum sem varius sit amet. Suspendisse bibendum sit amet enim ac mattis.
                        Donec tempus, ligula a tempus fringilla, augue nunc condimentum ex, eget pretium tortor velit vitae lorem. Suspendisse viverra ultricies lorem in cursus. Duis viverra magna eu est rhoncus, non porta nunc varius. Ut porttitor tellus et sem luctus mollis. In eget pharetra metus. Cras consectetur arcu sed pulvinar consequat. Vivamus vel maximus nunc, nec tincidunt nisi. Cras tristique ac odio vitae finibus. Sed et ullamcorper risus. Mauris sollicitudin lectus at dui molestie, at sagittis erat sollicitudin. Praesent nec justo malesuada, aliquet massa id, dapibus dolor. Vestibulum egestas congue aliquam. Pellentesque sit amet purus turpis. Morbi ultrices sem nulla, consequat fermentum orci egestas non. Sed cursus dolor elit, ut eleifend dui malesuada eu. Aliquam molestie sapien at condimentum tristique.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut interdum velit. Fusce tempor dignissim augue ut pretium. Duis lacinia venenatis eros, eu aliquam tortor tincidunt vel. In placerat nec lectus eget rhoncus. Vivamus sit amet augue ornare tellus volutpat semper. Nunc molestie tellus ut diam porta tincidunt. Morbi sit amet varius urna, at egestas est. Quisque eget orci congue, maximus erat sit amet, vehicula diam. Nulla eget arcu ut enim sagittis sollicitudin eu at lorem. Sed laoreet dolor in urna varius tincidunt. Nullam fringilla placerat felis sit amet molestie. Maecenas a tortor eu sapien varius luctus eu in felis. Praesent blandit erat neque, in semper quam ullamcorper at. In hac habitasse platea dictumst. Curabitur eu semper urna.
                        Curabitur a nulla sed nibh tincidunt laoreet ac quis dolor. Sed venenatis diam sem, eget ultricies eros tempor sit amet. Suspendisse vel tincidunt dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla dictum convallis placerat. Duis ullamcorper velit imperdiet mauris porta tincidunt. Fusce turpis libero, mollis quis accumsan at, ornare non felis. Duis justo augue, facilisis vitae ultrices sed, auctor id tellus. Pellentesque et tincidunt purus, eget commodo quam. Vestibulum facilisis felis at nibh sagittis porttitor. Praesent sed velit varius, porttitor justo in, scelerisque leo. Donec molestie eros at mi viverra ultrices.
                        Nam sollicitudin tincidunt nulla ac scelerisque. Morbi eget condimentum sem. Sed eros ligula, gravida sed viverra eu, cursus a massa. Duis egestas eros at imperdiet hendrerit. Donec id vulputate lectus. Nunc nec nibh at arcu eleifend scelerisque. Mauris pharetra in tortor eu eleifend. Integer sit amet accumsan ex, in mattis quam. In bibendum, felis eget pretium congue, lacus lacus consequat nisl, vel luctus enim nibh quis urna.
                        Donec vel bibendum eros, eget iaculis lorem. Maecenas quis efficitur felis, ut cursus velit. Donec turpis risus, luctus at lobortis ut, dapibus eu massa. Etiam in varius tortor. Mauris non tempus sem, ut elementum quam. Nam magna odio, sollicitudin ac tortor at, iaculis lacinia ante. Mauris at nulla vitae nisi vulputate ornare lobortis ut augue. Aenean sapien dui, tincidunt vel sodales vel, placerat et enim. Ut pellentesque bibendum elit. Nunc condimentum vulputate orci et interdum. Sed nec nunc aliquam, tristique velit ac, lacinia urna. Nullam quis accumsan lectus. Nunc et elit pellentesque, rhoncus libero non, accumsan quam.
                        Fusce sit amet scelerisque arcu. Nulla bibendum metus vel dolor euismod, at aliquam mi congue. Ut eget pulvinar felis. Quisque id sem sed arcu laoreet feugiat ac id leo. Pellentesque venenatis nisi ut lacus lacinia, sit amet sollicitudin nibh rutrum. Fusce non velit sed quam pellentesque posuere. Aenean sit amet ullamcorper massa. Vestibulum in elit sollicitudin, ornare quam sit amet, posuere sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum id velit nec justo interdum blandit nec in nisi. Phasellus ultricies tincidunt mauris, vitae vehicula est efficitur et. Nam lobortis, neque et congue porta, ex risus aliquam mauris, et ultricies nibh est nec sem. Sed posuere, ligula quis ornare dapibus, lacus justo viverra quam, non facilisis nunc ipsum ut tortor.
                        Maecenas vel nisi tempus, porttitor nisl vitae, lacinia sapien. Pellentesque sit amet nisi sit amet mauris ultrices feugiat. Ut ornare ante eget tortor ullamcorper, a tempor justo pharetra. Praesent nec mattis erat, vitae fringilla lacus. Sed aliquet erat ac est tincidunt sollicitudin. Quisque hendrerit, eros nec commodo pretium, neque odio aliquam enim, eget iaculis elit tellus at tortor. Ut placerat ac ligula sed ornare. Duis venenatis dolor et dui interdum dignissim. Donec cursus tortor eget efficitur commodo. Nullam auctor, metus ac gravida facilisis, orci sem elementum tortor, at feugiat magna mi non nisl. Maecenas eu tellus id urna tempus molestie.
                        In id sapien ut sapien dictum pulvinar egestas luctus eros. Maecenas ullamcorper posuere odio, vel aliquam diam lobortis eu. Sed eu sapien et magna varius mollis sit amet eget est. Mauris enim diam, feugiat interdum leo in, egestas posuere turpis. Nunc mattis, ipsum et aliquam tristique, orci sapien viverra lacus, eu venenatis justo orci id magna. Aenean sed posuere lectus. Cras nec nibh a nulla viverra blandit. Proin in quam consequat enim convallis rhoncus. Proin augue nibh, aliquam at dictum facilisis, volutpat eget enim. Mauris vestibulum interdum tortor, nec tristique leo tempor id. Ut finibus porttitor pharetra. Sed quam mauris, tincidunt non aliquet sed, ultrices in nulla. Quisque volutpat tristique purus. Suspendisse vel purus sed ligula tempor faucibus.
                        Sed pellentesque tincidunt nisi, sodales rhoncus nisl condimentum pellentesque. Pellentesque ultricies ullamcorper laoreet. Sed pharetra tellus dui, nec posuere libero tincidunt non. Praesent ut consequat leo. Vestibulum elementum, lectus at convallis vestibulum, ante felis tincidunt magna, a imperdiet urna felis eu ante. Praesent sed fermentum ipsum. Suspendisse sed neque leo. Curabitur viverra dui in risus pulvinar imperdiet. Donec sed tellus sed arcu auctor feugiat pulvinar ultrices augue.
                        Fusce mi justo, gravida at maximus vel, posuere ac ex. Fusce euismod neque eleifend metus condimentum tincidunt. Donec suscipit mi odio, egestas tempor ligula aliquet eget. Sed et lobortis magna. Pellentesque a sapien enim. Duis libero risus, condimentum vel felis at, suscipit consectetur lorem. Nullam lacinia varius mauris id elementum. Morbi fermentum sodales metus, et placerat tellus malesuada non. Vestibulum eleifend augue in iaculis consequat. Mauris rhoncus, nunc ac luctus vestibulum, enim massa placerat turpis, a hendrerit metus justo non ipsum. Aliquam dignissim hendrerit velit, sit amet fermentum sem varius sit amet. Suspendisse bibendum sit amet enim ac mattis.
                        Donec tempus, ligula a tempus fringilla, augue nunc condimentum ex, eget pretium tortor velit vitae lorem. Suspendisse viverra ultricies lorem in cursus. Duis viverra magna eu est rhoncus, non porta nunc varius. Ut porttitor tellus et sem luctus mollis. In eget pharetra metus. Cras consectetur arcu sed pulvinar consequat. Vivamus vel maximus nunc, nec tincidunt nisi. Cras tristique ac odio vitae finibus. Sed et ullamcorper risus. Mauris sollicitudin lectus at dui molestie, at sagittis erat sollicitudin. Praesent nec justo malesuada, aliquet massa id, dapibus dolor. Vestibulum egestas congue aliquam. Pellentesque sit amet purus turpis. Morbi ultrices sem nulla, consequat fermentum orci egestas non. Sed cursus dolor elit, ut eleifend dui malesuada eu. Aliquam molestie sapien at condimentum tristique.
                    </p>  
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut interdum velit. Fusce tempor dignissim augue ut pretium. Duis lacinia venenatis eros, eu aliquam tortor tincidunt vel. In placerat nec lectus eget rhoncus. Vivamus sit amet augue ornare tellus volutpat semper. Nunc molestie tellus ut diam porta tincidunt. Morbi sit amet varius urna, at egestas est. Quisque eget orci congue, maximus erat sit amet, vehicula diam. Nulla eget arcu ut enim sagittis sollicitudin eu at lorem. Sed laoreet dolor in urna varius tincidunt. Nullam fringilla placerat felis sit amet molestie. Maecenas a tortor eu sapien varius luctus eu in felis. Praesent blandit erat neque, in semper quam ullamcorper at. In hac habitasse platea dictumst. Curabitur eu semper urna.
                        Curabitur a nulla sed nibh tincidunt laoreet ac quis dolor. Sed venenatis diam sem, eget ultricies eros tempor sit amet. Suspendisse vel tincidunt dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla dictum convallis placerat. Duis ullamcorper velit imperdiet mauris porta tincidunt. Fusce turpis libero, mollis quis accumsan at, ornare non felis. Duis justo augue, facilisis vitae ultrices sed, auctor id tellus. Pellentesque et tincidunt purus, eget commodo quam. Vestibulum facilisis felis at nibh sagittis porttitor. Praesent sed velit varius, porttitor justo in, scelerisque leo. Donec molestie eros at mi viverra ultrices.
                        Nam sollicitudin tincidunt nulla ac scelerisque. Morbi eget condimentum sem. Sed eros ligula, gravida sed viverra eu, cursus a massa. Duis egestas eros at imperdiet hendrerit. Donec id vulputate lectus. Nunc nec nibh at arcu eleifend scelerisque. Mauris pharetra in tortor eu eleifend. Integer sit amet accumsan ex, in mattis quam. In bibendum, felis eget pretium congue, lacus lacus consequat nisl, vel luctus enim nibh quis urna.
                        Donec vel bibendum eros, eget iaculis lorem. Maecenas quis efficitur felis, ut cursus velit. Donec turpis risus, luctus at lobortis ut, dapibus eu massa. Etiam in varius tortor. Mauris non tempus sem, ut elementum quam. Nam magna odio, sollicitudin ac tortor at, iaculis lacinia ante. Mauris at nulla vitae nisi vulputate ornare lobortis ut augue. Aenean sapien dui, tincidunt vel sodales vel, placerat et enim. Ut pellentesque bibendum elit. Nunc condimentum vulputate orci et interdum. Sed nec nunc aliquam, tristique velit ac, lacinia urna. Nullam quis accumsan lectus. Nunc et elit pellentesque, rhoncus libero non, accumsan quam.
                        Fusce sit amet scelerisque arcu. Nulla bibendum metus vel dolor euismod, at aliquam mi congue. Ut eget pulvinar felis. Quisque id sem sed arcu laoreet feugiat ac id leo. Pellentesque venenatis nisi ut lacus lacinia, sit amet sollicitudin nibh rutrum. Fusce non velit sed quam pellentesque posuere. Aenean sit amet ullamcorper massa. Vestibulum in elit sollicitudin, ornare quam sit amet, posuere sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum id velit nec justo interdum blandit nec in nisi. Phasellus ultricies tincidunt mauris, vitae vehicula est efficitur et. Nam lobortis, neque et congue porta, ex risus aliquam mauris, et ultricies nibh est nec sem. Sed posuere, ligula quis ornare dapibus, lacus justo viverra quam, non facilisis nunc ipsum ut tortor.
                        Maecenas vel nisi tempus, porttitor nisl vitae, lacinia sapien. Pellentesque sit amet nisi sit amet mauris ultrices feugiat. Ut ornare ante eget tortor ullamcorper, a tempor justo pharetra. Praesent nec mattis erat, vitae fringilla lacus. Sed aliquet erat ac est tincidunt sollicitudin. Quisque hendrerit, eros nec commodo pretium, neque odio aliquam enim, eget iaculis elit tellus at tortor. Ut placerat ac ligula sed ornare. Duis venenatis dolor et dui interdum dignissim. Donec cursus tortor eget efficitur commodo. Nullam auctor, metus ac gravida facilisis, orci sem elementum tortor, at feugiat magna mi non nisl. Maecenas eu tellus id urna tempus molestie.
                        In id sapien ut sapien dictum pulvinar egestas luctus eros. Maecenas ullamcorper posuere odio, vel aliquam diam lobortis eu. Sed eu sapien et magna varius mollis sit amet eget est. Mauris enim diam, feugiat interdum leo in, egestas posuere turpis. Nunc mattis, ipsum et aliquam tristique, orci sapien viverra lacus, eu venenatis justo orci id magna. Aenean sed posuere lectus. Cras nec nibh a nulla viverra blandit. Proin in quam consequat enim convallis rhoncus. Proin augue nibh, aliquam at dictum facilisis, volutpat eget enim. Mauris vestibulum interdum tortor, nec tristique leo tempor id. Ut finibus porttitor pharetra. Sed quam mauris, tincidunt non aliquet sed, ultrices in nulla. Quisque volutpat tristique purus. Suspendisse vel purus sed ligula tempor faucibus.
                        Sed pellentesque tincidunt nisi, sodales rhoncus nisl condimentum pellentesque. Pellentesque ultricies ullamcorper laoreet. Sed pharetra tellus dui, nec posuere libero tincidunt non. Praesent ut consequat leo. Vestibulum elementum, lectus at convallis vestibulum, ante felis tincidunt magna, a imperdiet urna felis eu ante. Praesent sed fermentum ipsum. Suspendisse sed neque leo. Curabitur viverra dui in risus pulvinar imperdiet. Donec sed tellus sed arcu auctor feugiat pulvinar ultrices augue.
                        Fusce mi justo, gravida at maximus vel, posuere ac ex. Fusce euismod neque eleifend metus condimentum tincidunt. Donec suscipit mi odio, egestas tempor ligula aliquet eget. Sed et lobortis magna. Pellentesque a sapien enim. Duis libero risus, condimentum vel felis at, suscipit consectetur lorem. Nullam lacinia varius mauris id elementum. Morbi fermentum sodales metus, et placerat tellus malesuada non. Vestibulum eleifend augue in iaculis consequat. Mauris rhoncus, nunc ac luctus vestibulum, enim massa placerat turpis, a hendrerit metus justo non ipsum. Aliquam dignissim hendrerit velit, sit amet fermentum sem varius sit amet. Suspendisse bibendum sit amet enim ac mattis.
                        Donec tempus, ligula a tempus fringilla, augue nunc condimentum ex, eget pretium tortor velit vitae lorem. Suspendisse viverra ultricies lorem in cursus. Duis viverra magna eu est rhoncus, non porta nunc varius. Ut porttitor tellus et sem luctus mollis. In eget pharetra metus. Cras consectetur arcu sed pulvinar consequat. Vivamus vel maximus nunc, nec tincidunt nisi. Cras tristique ac odio vitae finibus. Sed et ullamcorper risus. Mauris sollicitudin lectus at dui molestie, at sagittis erat sollicitudin. Praesent nec justo malesuada, aliquet massa id, dapibus dolor. Vestibulum egestas congue aliquam. Pellentesque sit amet purus turpis. Morbi ultrices sem nulla, consequat fermentum orci egestas non. Sed cursus dolor elit, ut eleifend dui malesuada eu. Aliquam molestie sapien at condimentum tristique.
                    </p> 
                </div>
            </div>
        </div>
    </div>
<!-- FOOTER -->
    <nav class="navbar navbar-default navbar-bottom" id="footer" role="navigation">
        <div class="container">
            <div class="col-sm-4">
                <div class="navbar-left" id="footerMainLogo">
                    <a href="#"><img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 75 */ ?>/images/lusorion.png"></a>
                </div>
                <p><a href="#">CAREERS</a> | <a href="#">TEAM</a> | <a href="#" target="_blank">EULA</a> | <a href="#">FAQ</a></p>
                <p id="copyright">  &copy;2015 Lusorion Creatives. All rights reserved.<br> All trademarks are the property of their respective owners.</p>  
            </div>
            <div class="col-sm-4">
            </div>
            <div class="navbar-right col-sm-4 right">
                <p>
                    <img src="http://www.pegi.info/en/index/id/33/media/img/321.gif">
                    <img src="http://www.pegi.info/cs/index/img/descriptors/violence.gif">
                    <img src="http://www.pegi.info/en/index/id/33/media/img/274.gif">
                </p>  
            </div>
        </div>
    </nav>
                
<?php
	}


	function blockScripts($_args)
	{
		extract($_args);
		$this->renderBlockParent('scripts', get_defined_vars());
		
	}

}
