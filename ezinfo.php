<?php
class sVarnishInfo
{
    function info()
    {
        return array( 'Name' => "Simple Varnish",
                      'Version' => "0.1",
                      'Copyright' => "Copyright (C) 2010 <a href='http://www.stevoland.com' title='eZ Publish'>stevoland ltd</a>",
                      'License'   => 'GNU General Public License v2.0',
                      'Includes the following third-party software' => array( 'Name' => 'all2e Varnish Control Center',
                                                                              'Version' => '1.0',
                                                                              'Copyright' => "Copyright (C) 2008 <a href='http://www.all2e.com' title='eZ Publish'>all2e GmbH</a>",
                                                                             ),
                      'Includes the following third-party software' => array( 'Name' => 'eZ Varnish Login',
                                                                              'Version' => '1.0.0',
                                                                              'Copyright' => 'Copyright (C) 2008 eZ Systems AS / ar@ez.no, jr@ez.no',
                      														  'License'   => 'GNU General Public License v2.0',
                                                                             )
                      'Includes the following third-party software' => array( 'Name' => 'Cache Cookie',
                                                                              'Version' => '0.1',
                                                                              'Copyright' => "Copyright (C) 2010 <a href='http://www.stevoland.com' title='eZ Publish'>stevoland ltd</a>'"
                      														  'License'   => 'GNU General Public License v2.0',
                                                                             )
                     );
    }
}
?>
