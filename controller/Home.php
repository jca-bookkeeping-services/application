<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Home extends Controller{
		private $services;
		private $homeModel;
		private $pages;
		private $products;
		private $sample;

		public function main(){

			//get the models
			$this->_pages = $this->load->model('Admin/Pages_Model');
			$this->_services = $this->load->model('Admin/Services_Model');

			$pageData = $this->_pages->getPage('d',1);

			$view_data = array(
				"page" => "home",
				"title" => "JCA Bookkeeping Services"
			);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['mission'] = $content->mission;
					$view_data['vision'] = $content->vision;
				}
			}

			$pageData = $this->_pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			$view_data['services'] = $this->_services->getAllServices();

			
			$this->load->view("Home", $view_data);

		}

		public function display(){

			echo 'display controller';
		}
		

		public function about_us(){
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			$pageData = $this->pages->getPage('d',2);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['content'] = $content->content;
				}
			}

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			$view_data['services'] = $this->services->getServices();

			$validateFields = array(
				array('name' => 'firstname', 'label' => 'First Name', 'validation' => 'required'),
				array('name' => 'lastname', 'label' => 'Last Name', 'validation' => 'required'),
				array('name' => 'address', 'label' => 'Address', 'validation' => 'required'),
				array('name' => 'email', 'label' => 'Email', 'validation' => 'required|filter=email'),
				array('name' => 'phone', 'label' => 'Phone', 'validation' => 'required'),
				array('name' => 'message', 'label' => 'Message', 'validation' => 'required'),
			);

			if(count($this->form->post)) {
				if($this->form->validate($validateFields)) {
					$inquiry = $this->load->model('Inquiry_Model');
					$inquiry->addClientEmailProductInquiry($this->form->post);
					$this->tools->email = new Email;

					$this->sendEmail($this->form->post);
					
				}
			}

			$this->load->view('About_Us',$view_data);
		}
		public function ContactUs(){
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			$pageData = $this->pages->getPage('d',2);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['content'] = $content->content;
				}
			}

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			$view_data['services'] = $this->services->getServices();


			$validateFields = array(
				array('name' => 'firstname', 'label' => 'First Name', 'validation' => 'required'),
				array('name' => 'lastname', 'label' => 'Last Name', 'validation' => 'required'),
				array('name' => 'address', 'label' => 'Address', 'validation' => 'required'),
				array('name' => 'email', 'label' => 'Email', 'validation' => 'required|filter=email'),
				array('name' => 'phone', 'label' => 'Phone', 'validation' => 'required'),
				array('name' => 'message', 'label' => 'Message', 'validation' => 'required'),
			);

			if(count($this->form->post)) {
				if($this->form->validate($validateFields)) {
					$inquiry = $this->load->model('Inquiry_Model');
					$inquiry->addClientEmailProductInquiry($this->form->post);
					$this->tools->email = new Email;

					$this->sendEmail($this->form->post);
					
				}
			}
			
			$this->load->view('Contact_Us',$view_data);
		}		


		public function sageInquiries() {
			$id = '';
			$prod = array();

			if(count($this->uri->get) && array_key_exists('id', $this->uri->get) && strlen(trim($this->uri->get['id'])))
				$id = $this->uri->get['id'];

			$this->products = $this->load->model('Admin/Sage_Model');
			$inquiry = $this->load->model('Inquiry_Model');
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			$view_data['services'] = $this->services->getServices();

			$sessData = $this->session->sessionData;
			$inquire_id = array();

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			if(array_key_exists('inquire_id', $sessData)) {
				$inquire_id = $sessData['inquire_id'];
				if(!in_array($id, $inquire_id) && !empty($id)){
					$inquire_id[] = $id;
				} else {
				}
			} else {
				if(!empty($id))
					$inquire_id[] = $id;
			}

			//$inquire_id = array();

			$this->session->sessionData = array('inquire_id'=>$inquire_id);
			//print_r($this->session->sessionData['inquire_id']);
			//print_r($inquire_id);

			foreach ($inquire_id as $value) {
				$prod[] = $this->products->getProduct($value);
			}
			
			$view_data['products'] = $prod;	

			foreach ($view_data['products'] as &$product) {
				$product['price'] = number_format ($product['price'] ,2 );
			}

			$view_data['err'] = '';

			$validateFields = array(
				array('name' => 'firstname', 'label' => 'First Name', 'validation' => 'required'),
				array('name' => 'lastname', 'label' => 'Last Name', 'validation' => 'required'),
				array('name' => 'address', 'label' => 'Address', 'validation' => 'required'),
				array('name' => 'email', 'label' => 'Email', 'validation' => 'required|filter=email'),
				array('name' => 'phone', 'label' => 'Phone', 'validation' => 'required'),
				array('name' => 'message', 'label' => 'Message / Comment', 'validation' => 'required'),
			);

			if(count($this->form->post)) {
				if($this->form->validate($validateFields)) {
					$inquiry->addClientEmailProductInquiry($this->form->post);
					$this->tools->email = new Email;

					$this->sendEmail($this->form->post,'sage_products');
					
				} else {
					$view_data['err'] = 'error';
				}
			}
			

			$this->load->view('Sage_Inquiry',$view_data);
		}

		

		public function sageImplementations(){
			$view_data = array(
				'title' => 'JCA Sage Implementations',
			);

			$this->services = $this->load->model('Admin/Services_Model');
			$this->products = $this->load->model('Admin/Sage_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			$view_data['services'] = $this->services->getServices();
			$view_data['implementations'] = $this->products->getClientsOnly();

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			$this->load->view('Sage_Implementations',$view_data);
		}

		private function sendEmail($postData,$type = ''){

			$message = '';

			$this->tools->email = new Email;

			$this->tools->email->from = $postData['firstname'] . ' ' . $postData['lastname'] . ' <' . $postData['email'] . '> ';
			$this->tools->email->to = 'JCA Bookkeeping Services <jcabookkeeping@yahoo.com>;Egee Boy Gutierrez <egeeboygutierrez91@gmail.com> ';
			$this->tools->email->subject = $postData['subject'];


			if(!empty($type)) {
				switch ($type) {
					case 'sage_products':
						$message = '
							<html>
								<head>
									<title>Samole</title>

									
								</head>

						';
						$inquire_id = $this->session->sessionData['inquire_id'];

						$message .= '
							<body  style="font-family: "Open Sans",Calibri,Candara,Arial,sans-serif; margin: 0px auto; padding: 0px; margin: 0 auto; background: #FFFFF; color: #666; font-size: 15px; line-height: 25px; font-weight: 400;">								
								<div class="product_box" style="margin-left:10px; padding-top: 10px; padding-bottom: 10px;">
						';

						foreach ($inquire_id as $value) {

							$prod = $this->products->getProduct($value);

							$message .= '
								<p style="margin: 2px 0px;">These are the products that are inquired by ' . $postData['firstname'] . ' ' . $postData['lastname'] . '</p>
								<p style="margin: 2px 0px;">&nbsp;</p>
								<h4 style="font-size: 24px; line-height: 35px; font-family: "Open Sans", sans-serif; font-weight: normal !important; margin: 2px 0px 5px 0px; padding: 2px 0px; text-rendering: optimizelegibility; text-align: left; font-weight: 400 !important;">' . $prod['name'] . '</h4>
					            <div class="product_details" style="height: 100%;">
					                <table style="text-align: left; margin-left: 0px;">
					                    <tr >
					                        <td rowspan="2"><img style="width: 75px; height: 94px;" src="' . $this->base_url . $this->image_resource . '/' . str_replace('+', '%20', urlencode($prod['image']))  . '"></td>
					                        <td class="label" style="padding-left: 20px !important; padding-top: 10px; font-size: 18px;">' . $prod['brief_description'] . '</td>
					                    </tr>
					                    <tr>
					                        <td class="label price" style="padding-left: 20px !important; padding-top: 10px; font-size: 18px; vertical-align: bottom; font-size: 23px;">Price: Php ' . $prod['price'] . '</td>
					                    </tr>
					                </table>
					            </div>
					            <p style="margin: 2px 0px;">&nbsp;</p>            					
							';
							
						}

						$message .= '
								<p style="margin: 2px 0px;">' . $postData['message'] . '</p>
								</div> 
							</body>
						</html>
						';


						break;
					
					default:
						
						break;
				}
			} else {
				$message = '
					<html>
						<head>
							<title>Inquiry</title>						
						</head>
						<body style="font-family: "Open Sans",Calibri,Candara,Arial,sans-serif; margin: 0px auto; padding: 0px; margin: 0 auto; background: #FFFFF; color: #666; font-size: 15px; line-height: 25px; font-weight: 400;">
							<p style="margin: 2px 0px;">' . $postData['message'] . '</p>
						</body>
					</html>
				';
			}

			$this->tools->email->message = $message; 

			$this->tools->email->send();
		}

		public function clients(){
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');
			$this->products = $this->load->model('Admin/Sage_Model');
			$clients = $this->load->model('Admin/Clients_Model');


			

			$validateFields = array(
				array('name' => 'firstname', 'label' => 'First Name', 'validation' => 'required'),
				array('name' => 'lastname', 'label' => 'Last Name', 'validation' => 'required'),
				array('name' => 'address', 'label' => 'Address', 'validation' => 'required'),
				array('name' => 'email', 'label' => 'Email', 'validation' => 'required|filter=email'),
				array('name' => 'phone', 'label' => 'Phone', 'validation' => 'required'),
				array('name' => 'message', 'label' => 'Message', 'validation' => 'required'),
			);

			if(count($this->form->post)) {
				if($this->form->validate($validateFields)) {
					$inquiry = $this->load->model('Inquiry_Model');
					$inquiry->addClientEmailProductInquiry($this->form->post);
					$this->tools->email = new Email;

					$this->sendEmail($this->form->post);
					
				}
			}

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			$view_data['services'] = $this->services->getServices();
			$view_data['implementations'] = $this->products->getClients();
			$view_data['clients'] = $clients->getClients();
			$this->load->view('Clients',$view_data);
		}

		public function visaWorkPermit(){
			$name = '';


			if($this->validateGetField('name',$this->uri->get)) {
				$name = $this->uri->get['name'];
			}

			$visa = $this->load->model('Admin/Visa_Working_Permit_Model');
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			$visaResult = $visa->getVisaWorkingPermitByName($name);

			$view_data['display_text'] = $visaResult['display_text'];
			$view_data['content'] = $visaResult['content'];

			$view_data['services'] = $this->services->getServices();

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			$this->load->view('Visa_Working_Permit',$view_data);
		}
	}
?>