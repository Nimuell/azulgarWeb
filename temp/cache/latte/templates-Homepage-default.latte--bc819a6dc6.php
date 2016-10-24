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
?>

<?php
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
    <!-- Loading screen
    <div class='loading-screen'>
        <div id='ld' class='center'>
            <div class="cssload-loader">
                <div class="cssload-inner cssload-one"></div>
                <div class="cssload-inner cssload-two"></div>
                <div class="cssload-inner cssload-three"></div>
            </div>
        </div>
    </div>
    -->
    <h1 class='invi'>Legends of Azulgar</h1>
    <div class='mainpage-video'>
        <video autoplay='1' loop poster='<?php echo LR\Filters::escapeHtmlAttr($basePath) /* line 16 */ ?>/images/poster.jpg'  class='mainpage-video-src'>
            <source src='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */ ?>/videos/index.mp4' type='video/mp4'>
            <source src='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */ ?>/videos/index.webm' type='video/webm'>
        </video>
    </div>
    <div class='fixed-menu'>
        <div class='center'>
            <div class='menu-left'>
                <ul>
                    <a href='/mainpage' title='title 1'><li><div>Title 1</div></li></a>
                    <a href='#features'  data-hash='features' title='features'><li><div>Features</div></li></a>
                    <a href='/lore' title='lore'><li><div>Lore</div></li></a>
                    <a href='#media' data-hash='media' title='Media'><li><div>Media</div></li></a>
                    <a href='https://trello.com/b/BxStP4mi/loa-road-map' title='Roadmap'><li><div>Roadmap</div></li></a>
                    <a href='http://steamcommunity.com/sharedfiles/filedetails/discussions/672289879' title='Community'><li><div>Community</div></li></a>
                    <a href='#' title='Store'><li><div>Store</div></li></a>
                </ul>
            </div>
            <div class='menu-right'>
                <ul>
                    <a href='/account' title='Account'><li>Account</li></a>
                    <li><a href='https://www.facebook.com/legendofazulgar/' title='Facebook' target='_blank'><img src='images/fb.png' alt='facebook' title='facebook'></a></li>
                    <li><a href='https://www.youtube.com/user/AzulgarMMO/' target='_blank'><img src='images/yt.png' title='YouTube' alt='Youtube'></a></li>
                    <li><a href='http://www.indiedb.com/games/legend-of-azulgar' title='Indiedb' target='_blank'><img src='images/indiedb.png' alt='Indiedb' title='Indiedb'></a></li>	
                </ul>
            </div>
        </div>
    </div>

        
        

    <div class='footer'>
        <div class='footer-content'>
            <div class='footer-left'>
                <ul>
                    <li><a href='#' title='Careers'>Careers</a></li>
                    <li><a href='#' title='Team'>Team</a></li>
                    <li><a href='#' title='EULA'>EULA</a></li>
                    <li><a href='#' title='FAQ'>FAQ</a></li>
                </ul>
                <div class='lus-logo'>
                </div>
                <p>COPYRIGHT</p>
            </div>
            <div class='footer-right'>

                <select id='language'>
                    <option value='en'>English</option>
                    <option value='cs'>Čeština</option>
                </select>
                <div class='footer-images'>
                    <img src='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 68 */ ?>/images/pegi.gif' alt='Pegi'>
                    <img src='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 69 */ ?>/images/violence.gif' alt='Violence'>
                    <img src='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 70 */ ?>/images/online.gif' alt='Online'>
                </div>
            </div>
        </div>
    </div>
</body>        
<?php
	}


	function blockScripts($_args)
	{
		extract($_args);
		$this->renderBlockParent('scripts', get_defined_vars());
?>

<?php
	}

}
