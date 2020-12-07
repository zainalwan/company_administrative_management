<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Library\Zain;

class Random {
	private $string = 'lorem ipsum dolor sit amet consectetuer adipiscing elit donec hendrerit tempor tellus donec pretium posuere tellus proin quam nisl tincidunt et mattis eget convallis nec purus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus nulla posuere donec vitae dolor nullam tristique diam non turpis cras placerat accumsan nulla nullam rutrum nam vestibulum accumsan nisl lorem ipsum dolor sit amet consectetuer adipiscing elit donec hendrerit tempor tellus donec pretium posuere tellus proin quam nisl tincidunt et mattis eget convallis nec purus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus nulla posuere donec vitae dolor nullam tristique diam non turpis cras placerat accumsan nulla nullam rutrum nam vestibulum accumsan nisl lorem ipsum dolor sit amet consectetuer adipiscing elit donec hendrerit tempor tellus donec pretium posuere tellus proin quam nisl tincidunt et mattis eget convallis nec purus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus nulla posuere donec vitae dolor nullam tristique diam non turpis cras placerat accumsan nulla nullam rutrum nam vestibulum accumsan nisl';
	
	public function __construct()
	{
		$this->words = explode(' ', $this->string);
	}

	public function make()
	{
		return $this;
	}

	public function sentence($sentences = 1)
	{
		$str = '';

		for($sentence = 0; $sentence < $sentences; $sentence++)
		{
			$raw = '';
			
			for($word = 0; $word < 10; $word++)
			{
				$index = rand(0, sizeof($this->words) - 1);

				$raw = $raw . $this->words[$index];

				if($word != 9)
				{
					$raw = $raw . ' ';
				}
				elseif($word == 9)
				{
					$raw = $raw . '.';
				}
			}
			
			$raw[0] = strtoupper($raw[0]);

			if($sentences - $sentence != 1)
			{
				$str = $str . $raw . ' ';				
			}
			elseif($sentences - $sentence == 1)
			{
				$str = $str . $raw;	
			}
		}
		
		return $str;
	}

	public function paragraph($paragraphs)
	{
		$str = '';

		for($paragraph = 0; $paragraph < $paragraphs; $paragraph++)
		{
			$str = $str . $this->sentence(7);

			if($paragraphs - $paragraph != 1)
			{
				$str = $str . '_NEWPAR_';
			}
		}

		return $str;
	}

	public function name()
	{
		$name = '';

		for($i = 0; $i < 3; $i++)
		{
			$index = rand(0, sizeof($this->words) - 1);

			$word = $this->words[$index];
			$word[0] = strtoupper($word[0]);

			$name = $name . $word;

			if($i != 9)
			{
				$name = $name . ' ';
			}
			elseif($i == 9)
			{
				$name = $name . '.';
			}
		}

		return $name;
	}

	public function address()
	{
		$address = '';

		for($i = 0; $i < 6; $i++)
		{
			$index = rand(0, sizeof($this->words) - 1);

			$word = $this->words[$index];
			$word[0] = strtoupper($word[0]);

			$address = $address . $word;

			if($i != 9)
			{
				$address = $address . ' ';
			}
			elseif($i == 9)
			{
				$address = $address . '.';
			}
		}

		return $address;
	}

	public function email()
	{
		$email = '';

		for($i = 0; $i < 2; $i++)
		{
			$index = rand(0, sizeof($this->words) - 1);

			$email = $email . $this->words[$index];
		}

		$email = $email . '@site.com';

		return $email;
	}

	public function date()
	{
		$day = ceil(rand(1, 30));
		$month = ceil(rand(1, 12));

		return $day . '-' . $month . '-2020';
	}
}
