<?php 

class CompaniesController extends AppController{
	
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index(){
		$this->Company->locale = Configure::read('Config.language');
		$this->Company->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Company->find('all', array(
			'order' => array('Company.id' => 'desc')
		));
		$title_for_layout = __('Группа компаний');

		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$this->Company->locale = array('ru', 'kz', 'en');
		$this->Company->bindTranslation(array(
			'title' => 'titleTranslation'
		));
		$data = $this->Company->find('all');
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			
			$this->Company->create();
			$data = $this->request->data['Company'];

			 if(!isset($data['img']['name']) || !$data['img']['name']){
			 	unset($data['img']);
			}
			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Company->locale = 'kz';
			}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
				$this->Company->locale = 'en';
			}else{
				$this->Company->locale = 'ru';
			}
			// $this->Company->locale = 'ru';

			if($this->Company->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Company->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Company->findById($id);

		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Company->id = $id;
			$data1 = $this->request->data['Company'];
			
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Company->locale = 'kz';
			}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
				$this->Company->locale = 'en';
			}else{
				$this->Company->locale = 'ru';
			}
			// debug($this->Company->save($data1));
			$data1['id'] = $id;
			if($this->Company->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка!', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if($this->request->is('post')){
			$this->request->data = $data1;
			$data = $data1;
		}else{
			$this->Company->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Company->findById($id);
		}
		
		$this->set(compact('id', 'data'));
	}

	public function admin_delete($id){
		if (!$this->Company->exists($id)) {
			throw new NotFounddException('Такого материала нет');
		}
		if($this->Company->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Company->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		$this->Company->locale = Configure::read('Config.language');
		$this->Company->bindTranslation(array('title' => 'titleTranslation'));

		$data = $this->Company->findById($id);
		$title_for_layout = $data['Company']['title'];
		$this->set(compact('data', 'title_for_layout'));
	}
}