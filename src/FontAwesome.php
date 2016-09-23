<?php

namespace LucasRuroken\FontAwesome;

class FontAwesome
{
	protected $tag = 'i';

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
				$this->attributes($options)
			) .
			$this->closeTag();
	}

    /**
     * @param $name
     * @return string
     */
    protected function parse($name)
	{
		if (substr($name, 0, 3) == 'fa-')
		{
			return $name;
		}

		return "fa-$name";
	}

    /**
     * @param string $content
     * @return string
     */
    protected function openTag($content = '')
	{
		return '<' . $this->tag . $content . '>';
	}

    /**
     * @return string
     */
    protected function closeTag()
	{
		return '</' . $this->tag . '>';
	}

    /**
     * @param $name
     * @param string $extra
     * @return string
     */
    protected function getClasses($name, $extra = '')
	{
		return 'fa ' . $this->parse($name) . ($extra ? " $extra" : '');
	}

    /**
     * @param $options
     * @return array
     */
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

    /**
     * @param $attributes
     * @return string
     */
    public function attributes($attributes)
    {
        $html = [];

        foreach ((array) $attributes as $key => $value) {
            $element = $this->attributeElement($key, $value);

            if (! is_null($element)) {
                $html[] = $element;
            }
        }

        return count($html) > 0 ? ' ' . implode(' ', $html) : '';
    }

    /**
     * @param $key
     * @param $value
     * @return string
     */
    protected function attributeElement($key, $value)
    {
        if (is_numeric($key)) {
            $key = $value;
        }

        if (! is_null($value)) {
            return $key . '="' . e($value) . '"';
        }
    }
}