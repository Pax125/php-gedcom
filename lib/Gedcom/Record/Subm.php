<?php
/**
 *
 */

namespace Gedcom\Record;

/**
 *
 */
class Subm extends \Gedcom\Record
{
    public $name = null;
    public $addr = null;
    public $rin = null;
    public $rfn = null;
    
    public $langs = array();
    public $phon = array();
    
    /**
     *
     */
    public function addLanguage($lang)
    {
        $this->langs[] = $lang;
    }
    
    /**
     *
     */
    public function addPhon(\Gedcom\Record\Phon &$phon)
    {
        $this->phon[] = $phon;
    }
}

