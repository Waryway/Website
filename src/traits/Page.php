<?php
namespace src\traits;

trait Page
{
	/**
	 * @var Session
	 */
	private $Session;
	
	/**
	 * @var string
	 */
	private $pageName;
	
	/**
	 * @var Logger
	 */
	public $log;
	
	public function getPageName()
	{
		return $this->pageName;
	}
	
	public function setPageName($pageName)
	{
		
		
		
		if (strlen($pageName) > 64)
		{
			
		}
		$this->pageName = $pageName;
	}
	
	
    final public function __construct()
	{
		\Logger::configure("..\\config\\logger.xml");
				$this->log = \Logger::getLogger(__CLASS__);

		$this->log->error('aliens');
		
		
		/** @var $this->Session Session */
		$this->Session = \src\singleton\Session::inst();
		$this->Session->Start();
		$this->RenderPage();
	}
	
	final private function RenderPage()
	{
		$headContent = $this->RenderHead();
		$bodyContent = $this->RenderBody();
		
		echo <<<HTML
<html><head>{$headContent}</head><body>{$bodyContent}</body></html>
HTML;
	}
	
	final private function RenderHead()
	{
		$title = $this->RenderTitle();
		$css = $this->RenderCss();
		$javascript = $this->RenderJavascript();
		
		return '';
	}
	
	final private function RenderTitle()
	{
		return '<title>'.$this->getPageName().'</title>';
	}
	
	protected function RenderCss()
	{
		return '';
	}
	
	protected function RenderJavascript()
	{
		return '';
	}
	
	protected function RenderBody()
	{
		return "We're sorry, this page just never got its content going!";
	}
	
	
	
	
	
	
	
}
?>