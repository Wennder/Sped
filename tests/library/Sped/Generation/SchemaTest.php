<?php

namespace Sped\Generation;

require_once dirname(__FILE__) . '/../../../../library/Sped/Generation/Schema.php';

/**
 * Test class for Schema.
 * Generated by PHPUnit on 2012-06-07 at 15:03:30.
 */
class SchemaTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Schema
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Schema;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    public function testLoadXmlSchema() {
        $this->object->loadXmlSchema('../xmlschemas/nfe_v2.00.xsd');
    }

    public function testExportClasses() {
        $this->object->loadXmlSchema('../xmlschemas/nfe_v2.00.xsd');
        $this->object->setDirTarget('../library');
        $this->object->setDefaultNamespace('\Sped\Schemas\V200');
        $this->object->exportClasses();
    }

}