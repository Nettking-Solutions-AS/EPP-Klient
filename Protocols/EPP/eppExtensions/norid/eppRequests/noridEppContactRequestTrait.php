<?php
namespace Metaregistrar\EPP;

trait noridEppContactRequestTrait {

    /**
     * Norid contact extension object to add namespaces to
     * @var \DomElement
     */
    protected $contactextension = null;

    protected function getContactExtension() {
        if (is_null($this->contactextension)) {
            $this->contactextension = $this->createElement('no-ext-contact:'.$type);
            if (!$this->rootNamespaces()) {
                $this->contactextension->setAttribute('xmlns:no-ext-contact', 'http://www.norid.no/xsd/no-ext-contact-1.0');
            }
            $this->getExtension()->appendChild($this->contactextension);
        }

        return $this->contactextension;
    }

}