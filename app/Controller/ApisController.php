<?php
App::uses('AppController', 'Controller');
/**
 * EventRegistrations Controller
 *
 * @property EventRegistration $EventRegistration
 * @property PaginatorComponent $Paginator
 */
class ApisController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $connection;

    public function connect(){
        $this->connection = curl_init();

        $headers = array();

        $headers[] = 'Authorization : Token 1bb953ed767b88a0965d2bdf328138c58034a701';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';

        curl_setopt($this->connection, CURLOPT_HTTPHEADER, $headers);

        $this->autoRender = false;
    }

    public function addAttendee(){
        $this->connect();
        $userData = $this->params->data;

        $eventID = $userData['User']['event_id'];
        curl_setopt($this->connection,CURLOPT_URL,'https://www.boomset.com/restapi/guestlist/add_guest/'.$eventID);

        $data = array(
            'amount'=> 1,
            'created'=>date('Y-m-d H:i:s'),
            'customquestions'=> '',
            'email'=> $userData['User']['email'],
            'name'=> $userData['User']['first_name'],
            'lastname'=> $userData['User']['last_name'],
            'eventID'=> $eventID,
            'paid'=> 10,
            'sourceID'=> 24,
            'reservationTypeID' => $userData['User']['reservation_type_id'],
            'reservations' => array(
                107931 => array(
                    "amount" => 0,
        "quantity" => 1
                )
            )
        );
        curl_setopt($this->connection,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($this->connection,CURLOPT_POST,true);
        curl_setopt($this->connection,CURLOPT_POSTFIELDS,$data);


        $addAt = curl_exec($this->connection);
        print_r($addAt);
        curl_close($this->connection);
    }

    public function index(){

        $this->connect();
        //Connect to the WebService

        curl_setopt($this->connection,CURLOPT_URL,'https://www.boomset.com/restapi/accounts/me');

        $addAt = curl_exec($this->connection);
        print_r(json_decode($addAt));
        curl_close($this->connection);
        $this->render('index');

    }


}



curl --data '{"amount": 0,"created": "2015-07-29T18:35:31","customquestions": "","defaultQuestions": {},"email": "pablo.iglesias02+apitest@gmail.com","eventID": 24570,"lastname": "Amazing","name": "Pablo","reservationTypeID": 107931,"reservations": {"107931":{"amount":0,"quantity":1}},"sourceID": 24,"paid": 10}' -H "Content-Type: application/x-www-form-urlencoded" -H 'Authorization : Token 1bb953ed767b88a0965d2bdf328138c58034a701' https://www.boomset.com/restapi/guestlist/add_guest/24570
