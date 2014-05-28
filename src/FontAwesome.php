<?php namespace Digbang\FontAwesome;
use Illuminate\Html\HtmlBuilder;

/**
 * Class FontAwesome
 */
class FontAwesome
{
	protected $tag = 'i';
	protected $htmlBuilder;

	function __construct(HtmlBuilder $htmlBuilder)
	{
		$this->htmlBuilder = $htmlBuilder;
	}


	/**
	 * Builds a FontAwesome icon HTML.
	 * @param string $name The icon name, as indicated in the FA documentation.
	 * @param array $options Extra class/es to add to the icon
	 * @return string
	 */
	public function icon($name, $options = [])
	{
		$options = $this->parseOptions($options);

		$classes = $this->getClasses($name, array_pull($options, 'class'));

		return
			$this->openTag(
				' class="' . $classes . '"' .
				$this->htmlBuilder->attributes($options)
			) .
			$this->closeTag();
	}

	protected function parse($name)
	{
		if (substr($name, 0, 3) == 'fa-')
		{
			return $name;
		}

		return "fa-$name";
	}

	protected function openTag($content = '')
	{
		return '<' . $this->tag . $content . '>';
	}

	protected function closeTag()
	{
		return '</' . $this->tag . '>';
	}

	protected function getClasses($name, $extra = '')
	{
		return 'fa ' . $this->parse($name) . ($extra ? " $extra" : '');
	}

	protected function parseOptions($options)
	{
		if (!is_array($options))
		{
			$options = ['class' => (string) $options];
		}

		return $options;
	}

	/**
	 * @param string $tag
	 */
	public function setTag($tag)
	{
		$this->tag = $tag;
	}

	/**
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
	}
}