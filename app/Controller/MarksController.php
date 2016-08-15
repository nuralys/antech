<?php 

class MarksController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index($id){
		if(is_null($id) || !(int)$id || !$this->Mark->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$this->Mark->locale = Configure::read('Config.language');
		$this->Mark->Category->Company->locale = Configure::read('Config.language');
		$this->Mark->bindTranslation(array('title' => 'titleTranslation'));
		$data = $this->Mark->findById($id);
		$company_id = $data['Category']['company_id'];
		$title_for_layout = $data['Mark']['title'];
		$company = $this->Mark->Category->Company->find('first', array(
			'conditions' => array('Company.id' => $company_id),
			'recursive' => -1,
			'limit' => 1
			));
		// debug($company);
		// $meta['keywords'] = $post['Category']['keywords'];
		// $meta['description'] = $post['Category']['description'];
		$this->set(compact('data', '','title_for_layout' , 'company'));
	}

	public function admin_index(){
		$this->Mark->locale = 'ru';
		$this->Mark->bindTranslation(array(
			'title' => 'titleTranslation'
		));
		$data = $this->Mark->find('all');
		// debug($data);
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Mark->create();
			$data = $this->request->data['Mark'];

			if(!isset($data['img']['name']) || !$data['img']['name']){
				unset($data['img']);
			}
			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Mark->locale = 'kz';
			}else{
				$this->Mark->locale = 'ru';
			}
			if($this->Mark->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$this->Mark->Category->locale = 'ru';
		$categories = $this->Mark->Category->find('list');
		$this->set(compact('categories'));
	}

	public function admin_edit($id){
		
		if(is_null($id) || !(int)$id || !$this->Mark->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Mark->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Mark->id = $id;
			// $this->Mark->locale = Configure::read('Config.languages');
			// debug($this->Mark->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Mark'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}

			
			// $this->Mark->locale = 'kz';
			// debug($data1);
			$data1['id'] = $id;
			if($this->Mark->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data)
		{
			$this->request->data = $data;
			$this->set(compact('id', 'data'));
		}

	}

	public function admin_delete($id){
		if (!$this->Mark->exists($id)) {
			throw new NotFounddException('Такой страницы нет');
		}
		if($this->Mark->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Mark->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		
		$title_for_layout = $post['Mark']['title'];
		$meta['keywords'] = $post['Mark']['keywords'];
		$meta['description'] = $post['Mark']['description'];
		$this->set(compact('title_for_layout', 'meta'));
	}

}