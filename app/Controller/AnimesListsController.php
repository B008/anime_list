<?php
App::uses('AppController', 'Controller');
/**
 * AnimesLists Controller
 *
 * @property AnimesList $AnimesList
 * @property PaginatorComponent $Paginator
 */
class AnimesListsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AnimesList->recursive = 0;
		$this->set('animesLists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AnimesList->exists($id)) {
			throw new NotFoundException(__('Invalid animes list'));
		}
		$options = array('conditions' => array('AnimesList.' . $this->AnimesList->primaryKey => $id));
		$this->set('animesList', $this->AnimesList->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AnimesList->create();
			if ($this->AnimesList->save($this->request->data)) {
				$this->Session->setFlash(__('The animes list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The animes list could not be saved. Please, try again.'));
			}
		}
		$genres = $this->AnimesList->Genre->find('list');
		$this->set(compact('genres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AnimesList->exists($id)) {
			throw new NotFoundException(__('Invalid animes list'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AnimesList->save($this->request->data)) {
				$this->Session->setFlash(__('The animes list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The animes list could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AnimesList.' . $this->AnimesList->primaryKey => $id));
			$this->request->data = $this->AnimesList->find('first', $options);
		}
		$genres = $this->AnimesList->Genre->find('list');
		$this->set(compact('genres'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AnimesList->id = $id;
		if (!$this->AnimesList->exists()) {
			throw new NotFoundException(__('Invalid animes list'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AnimesList->delete()) {
			$this->Session->setFlash(__('The animes list has been deleted.'));
		} else {
			$this->Session->setFlash(__('The animes list could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
