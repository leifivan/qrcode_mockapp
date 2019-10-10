<?php

App::uses('AppController', 'Controller');
App::uses('QRcode', 'Lib');

/**
 * QRCode Controller
 *
 */
class QRCodeController extends AppController
{
    /**
     * beforeFilter function
     * 
     * {@inheritDoc}
     */
    public function beforeFilter()
    {
        parent::beforeFilter();
    }

    /**
     * Load models
     *
     * @var array
     */
    // public $uses = [
    //     'Information',
    //     'MstPrefecture',
    //     'Request',
    //     'RequestStatusHistory',
    //     'User'
    // ];

    /**
     * 
     * @return void
     */
    public function index()
    {

    }

    /**
     * 
     * @return void
     */
    public function new_qrcode_google_api()
    {
        $types = array('text' => 'Text', 'url' => 'Url', 'tel' => 'Phone Number', 'sms' => 'Text message', 'email' => 'E-Mail', 'geo' => 'Geo', 'market' => 'Market', 'card' => 'Vcard');
        if ($this->request->is('post')) {
            switch ($this->request->data['Misc']['type']) {
                case 'url':
                case 'tel':
                case 'email':
                case 'geo':
                case 'market':
                case 'card':
                    $result = $this->request->data['Card'];
                    $result['birthday'] = $result['birthday']['year'] . '-' . $result['birthday']['month'] . '-' . $result['birthday']['day'];
                    break;
                case 'sms':
                    $result = array($this->request->data['Sms']['number'], $this->request->data['Sms']['content']);
                    break;
                case 'text':
                    $result = $this->request->data['Misc']['content'];
                    break;
                default:
                    $result = null;
            }
            $this->set(compact('result'));
        }
        $this->set(compact('types'));
        $this->helpers[] = 'QrCode';
    }

    /**
     * 
     * @return void
     */
    public function new_qrcode_javascript()
    {

    }

    /**
     * 
     * @return void
     */
    public function new_qrcode_php()
    {
        if ($this->request->is('post')) {
            $text = $this->request->data['Misc']['content'];
            $qrcode = QRcode::png($text);
            $this->set(compact('qrcode'));
        }
    }

    /**
     * 
     * @return void
     */
    public function list_qrcode()
    {

    }
}
