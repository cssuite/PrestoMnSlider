<?

class NewSlider extends Module
{
	public function __construct()
  	{
		$this->name = 'Our cup winner';
		$this->tab = 'front_office_features';
		$this->version = '0.0.1';
		$this->author = 'Unkown';
		$this->need_instance = 0;
		$this->bootstrap = true;
	
		parent::__construct();
	
		$this->displayName = $this->l('New slider');
		$this->description = $this->l('Description of new slider.');
	
		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
	  }
	public function install()
	{
	   
		if (!parent::install() ||
		  !$this->registerHook('header') ||
		  !Configuration::updateValue('NSLIDER', 'qwe')
		) {
		  return false;
		}
	   
		return true;
    }
    
    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('NSLIDER')
        ) {
            return false;
        }
        
        return true;
    }


}
