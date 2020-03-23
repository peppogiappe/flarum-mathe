<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2020 The s9e authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
class Renderer_a3c2bc0f2b56c7f0bfd3fe225f8c2f287d9b3f65 extends \s9e\TextFormatter\Renderers\PHP
{
	protected $params=['DISCUSSION_URL'=>'http://flarum.local/d/','PROFILE_URL'=>'http://flarum.local/u/'];
	protected function renderNode(\DOMNode $node)
	{
		switch($node->nodeName){case'C':$this->out.='<code>';$this->at($node);$this->out.='</code>';break;case'CODE':$this->out.='<pre><code';if($node->hasAttribute('lang'))$this->out.=' class="language-'.htmlspecialchars($node->getAttribute('lang'),2).'"';$this->out.='>';$this->at($node);$this->out.='</code></pre>';break;case'DEL':$this->out.='<del>';$this->at($node);$this->out.='</del>';break;case'E':switch($node->textContent){case':\'(':$this->out.='😢';break;case':(':$this->out.='🙁';break;case':)':$this->out.='🙂';break;case':D':$this->out.='😃';break;case':O':$this->out.='😮';break;case':P':$this->out.='😛';break;case':|':$this->out.='😐';break;case';)':$this->out.='😉';break;case'>:(':$this->out.='😡';break;default:$this->out.=htmlspecialchars($node->textContent,0);}break;case'EM':$this->out.='<em>';$this->at($node);$this->out.='</em>';break;case'EMAIL':$this->out.='<a href="mailto:'.htmlspecialchars($node->getAttribute('email'),2).'">';$this->at($node);$this->out.='</a>';break;case'ESC':$this->at($node);break;case'H1':$this->out.='<h1>';$this->at($node);$this->out.='</h1>';break;case'H2':$this->out.='<h2>';$this->at($node);$this->out.='</h2>';break;case'H3':$this->out.='<h3>';$this->at($node);$this->out.='</h3>';break;case'H4':$this->out.='<h4>';$this->at($node);$this->out.='</h4>';break;case'H5':$this->out.='<h5>';$this->at($node);$this->out.='</h5>';break;case'H6':$this->out.='<h6>';$this->at($node);$this->out.='</h6>';break;case'HR':$this->out.='<hr>';break;case'IMATH':$this->out.='<span class="mathren-inline';if($node->hasAttribute('imath'))$this->out.=' mathren-ignore';$this->out.='">
                        [imath]';$this->at($node);$this->out.='[/imath]
                    </span>';break;case'IMG':$this->out.='<img src="'.htmlspecialchars($node->getAttribute('src'),2).'"';if($node->hasAttribute('alt'))$this->out.=' alt="'.htmlspecialchars($node->getAttribute('alt'),2).'"';if($node->hasAttribute('title'))$this->out.=' title="'.htmlspecialchars($node->getAttribute('title'),2).'"';$this->out.='>';break;case'ISPOILER':$this->out.='<span class="spoiler" onclick="removeAttribute(\'style\'); removeAttribute(\'class\')" style="background:#444;color:transparent">';$this->at($node);$this->out.='</span>';break;case'LI':$this->out.='<li>';$this->at($node);$this->out.='</li>';break;case'LIST':if(!$node->hasAttribute('type')){$this->out.='<ul>';$this->at($node);$this->out.='</ul>';}else{$this->out.='<ol';if($node->hasAttribute('start'))$this->out.=' start="'.htmlspecialchars($node->getAttribute('start'),2).'"';$this->out.='>';$this->at($node);$this->out.='</ol>';}break;case'MATH':$this->out.='<span class="mathren-block';if($node->hasAttribute('math'))$this->out.=' mathren-ignore';$this->out.='">
                        [math]';$this->at($node);$this->out.='[/math]
                    </span>';break;case'POSTMENTION':$this->out.='<a href="'.htmlspecialchars($this->params['DISCUSSION_URL'].$node->getAttribute('discussionid'),2).'/'.htmlspecialchars($node->getAttribute('number'),2).'" class="PostMention" data-id="'.htmlspecialchars($node->getAttribute('id'),2).'">'.htmlspecialchars($node->getAttribute('displayname'),0).'</a>';break;case'QUOTE':$this->out.='<blockquote>';$this->at($node);$this->out.='</blockquote>';break;case'SPOILER':$this->out.='<details class="spoiler">';$this->at($node);$this->out.='</details>';break;case'STRONG':$this->out.='<strong>';$this->at($node);$this->out.='</strong>';break;case'SUB':$this->out.='<sub>';$this->at($node);$this->out.='</sub>';break;case'SUP':$this->out.='<sup>';$this->at($node);$this->out.='</sup>';break;case'UPL-FILE':$this->out.='<div class="ButtonGroup" data-fof-upload-download-uuid="'.htmlspecialchars($node->getAttribute('uuid'),2).'"><div class="Button hasIcon Button--icon Button--primary"><i class="fas fa-download"></i></div><div class="Button">'.htmlspecialchars($node->getAttribute('content'),0).'</div><div class="Button">'.htmlspecialchars($node->getAttribute('size'),0).'</div></div>';break;case'UPL-IMAGE':$this->out.='<div class="fof-download row" data-fof-upload-download-uuid="'.htmlspecialchars($node->getAttribute('uuid'),2).'"><div class="card"><div class="wrapper" style="background:url('.htmlspecialchars($node->getAttribute('url'),2).') center / cover no-repeat"><div class="header"><ul class="menu-content"><li><div class="far fa-hdd"><span>'.htmlspecialchars($node->getAttribute('size'),0).'</span></div></li></ul></div><div class="data"><div class="content"><h4 class="title">'.htmlspecialchars($node->getAttribute('content'),0).'</h4><div class="Button Button--primary Button-icon Button--block"><i class="fas fa-download"></i></div></div></div></div></div></div>';break;case'UPL-IMAGE-PREVIEW':$this->out.='<img src="'.htmlspecialchars($node->getAttribute('url'),2).'" title="'.htmlspecialchars($node->getAttribute('base_name'),2).'">';break;case'URL':$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" rel=" nofollow ugc">';$this->at($node);$this->out.='</a>';break;case'USERMENTION':$this->out.='<a href="'.htmlspecialchars($this->params['PROFILE_URL'].$node->getAttribute('username'),2).'" class="UserMention">@'.htmlspecialchars($node->getAttribute('displayname'),0).'</a>';break;case'br':$this->out.='<br>';break;case'e':case'i':case's':break;case'p':$this->out.='<p>';$this->at($node);$this->out.='</p>';break;default:$this->at($node);}
	}
	/** {@inheritdoc} */
	public $enableQuickRenderer=true;
	/** {@inheritdoc} */
	protected $static=['/C'=>'</code>','/CODE'=>'</code></pre>','/DEL'=>'</del>','/EM'=>'</em>','/EMAIL'=>'</a>','/ESC'=>'','/H1'=>'</h1>','/H2'=>'</h2>','/H3'=>'</h3>','/H4'=>'</h4>','/H5'=>'</h5>','/H6'=>'</h6>','/IMATH'=>'[/imath]
                    </span>','/ISPOILER'=>'</span>','/LI'=>'</li>','/MATH'=>'[/math]
                    </span>','/QUOTE'=>'</blockquote>','/SPOILER'=>'</details>','/STRONG'=>'</strong>','/SUB'=>'</sub>','/SUP'=>'</sup>','/URL'=>'</a>','C'=>'<code>','DEL'=>'<del>','EM'=>'<em>','ESC'=>'','H1'=>'<h1>','H2'=>'<h2>','H3'=>'<h3>','H4'=>'<h4>','H5'=>'<h5>','H6'=>'<h6>','HR'=>'<hr>','ISPOILER'=>'<span class="spoiler" onclick="removeAttribute(\'style\'); removeAttribute(\'class\')" style="background:#444;color:transparent">','LI'=>'<li>','QUOTE'=>'<blockquote>','SPOILER'=>'<details class="spoiler">','STRONG'=>'<strong>','SUB'=>'<sub>','SUP'=>'<sup>'];
	/** {@inheritdoc} */
	protected $dynamic=['EMAIL'=>['(^[^ ]+(?> (?!email=)[^=]+="[^"]*")*(?> email="([^"]*)")?.*)s','<a href="mailto:$1">'],'IMG'=>['(^[^ ]+(?> (?!(?:alt|src|title)=)[^=]+="[^"]*")*( alt="[^"]*")?(?> (?!(?:src|title)=)[^=]+="[^"]*")*(?> src="([^"]*)")?(?> (?!title=)[^=]+="[^"]*")*( title="[^"]*")?.*)s','<img src="$2"$1$3>'],'UPL-IMAGE-PREVIEW'=>['(^[^ ]+(?> (?!(?:base_name|url)=)[^=]+="[^"]*")*(?> base_name="([^"]*)")?(?> (?!url=)[^=]+="[^"]*")*(?> url="([^"]*)")?.*)s','<img src="$2" title="$1">'],'URL'=>['(^[^ ]+(?> (?!url=)[^=]+="[^"]*")*(?> url="([^"]*)")?.*)s','<a href="$1" rel=" nofollow ugc">']];
	/** {@inheritdoc} */
	protected $quickRegexp='(<(?:(?!/)((?:E|HR|IMG|POSTMENTION|U(?:PL-(?:FILE|IMAGE(?:-PREVIEW)?)|SERMENTION)))(?: [^>]*)?>.*?</\\1|(/?(?!br/|p>)[^ />]+)[^>]*?(/)?)>)s';
	/** {@inheritdoc} */
	protected function renderQuickTemplate($id, $xml)
	{
		$attributes=$this->matchAttributes($xml);
		$html='';switch($id){case'/LIST':$attributes=array_pop($this->attributes);if(!isset($attributes['type']))$html.='</ul>';else$html.='</ol>';break;case'CODE':$html.='<pre><code';if(isset($attributes['lang']))$html.=' class="language-'.$attributes['lang'].'"';$html.='>';break;case'E':$textContent=$this->getQuickTextContent($xml);switch($textContent){case':\'(':$html.='😢';break;case':(':$html.='🙁';break;case':)':$html.='🙂';break;case':D':$html.='😃';break;case':O':$html.='😮';break;case':P':$html.='😛';break;case':|':$html.='😐';break;case';)':$html.='😉';break;case'>:(':$html.='😡';break;default:$html.=htmlspecialchars($textContent,0);}break;case'IMATH':$html.='<span class="mathren-inline';if(isset($attributes['imath']))$html.=' mathren-ignore';$html.='">
                        [imath]';break;case'LIST':if(!isset($attributes['type']))$html.='<ul>';else{$html.='<ol';if(isset($attributes['start']))$html.=' start="'.$attributes['start'].'"';$html.='>';}$this->attributes[]=$attributes;break;case'MATH':$html.='<span class="mathren-block';if(isset($attributes['math']))$html.=' mathren-ignore';$html.='">
                        [math]';break;case'POSTMENTION':$attributes+=['discussionid'=>null,'number'=>null,'id'=>null,'displayname'=>null];$html.='<a href="'.htmlspecialchars($this->params['DISCUSSION_URL'].htmlspecialchars_decode($attributes['discussionid']),2).'/'.$attributes['number'].'" class="PostMention" data-id="'.$attributes['id'].'">'.str_replace('&quot;','"',$attributes['displayname']).'</a>';break;case'UPL-FILE':$attributes+=['uuid'=>null,'content'=>null,'size'=>null];$html.='<div class="ButtonGroup" data-fof-upload-download-uuid="'.$attributes['uuid'].'"><div class="Button hasIcon Button--icon Button--primary"><i class="fas fa-download"></i></div><div class="Button">'.str_replace('&quot;','"',$attributes['content']).'</div><div class="Button">'.str_replace('&quot;','"',$attributes['size']).'</div></div>';break;case'UPL-IMAGE':$attributes+=['uuid'=>null,'url'=>null,'size'=>null,'content'=>null];$html.='<div class="fof-download row" data-fof-upload-download-uuid="'.$attributes['uuid'].'"><div class="card"><div class="wrapper" style="background:url('.$attributes['url'].') center / cover no-repeat"><div class="header"><ul class="menu-content"><li><div class="far fa-hdd"><span>'.str_replace('&quot;','"',$attributes['size']).'</span></div></li></ul></div><div class="data"><div class="content"><h4 class="title">'.str_replace('&quot;','"',$attributes['content']).'</h4><div class="Button Button--primary Button-icon Button--block"><i class="fas fa-download"></i></div></div></div></div></div></div>';break;case'USERMENTION':$attributes+=['username'=>null,'displayname'=>null];$html.='<a href="'.htmlspecialchars($this->params['PROFILE_URL'].htmlspecialchars_decode($attributes['username']),2).'" class="UserMention">@'.str_replace('&quot;','"',$attributes['displayname']).'</a>';}

		return $html;
	}
}