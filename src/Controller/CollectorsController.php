<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Collectors Controller
 *
 * @property \App\Model\Table\CollectorsTable $Collectors
 *
 * @method \App\Model\Entity\Collector[] paginate($object = null, array $settings = [])
 */
class CollectorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $collectors = $this->paginate($this->Collectors);

        $this->set(compact('collectors'));
        $this->set('_serialize', ['collectors']);
    }

    /**
     * View method
     *
     * @param string|null $id Collector id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $collector = $this->Collectors->get($id, [
            'contain' => ['Collections']
        ]);

        $this->set('collector', $collector);
        $this->set('_serialize', ['collector']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $collector = $this->Collectors->newEntity();
        if ($this->request->is('post')) {
            $collector = $this->Collectors->patchEntity($collector, $this->request->getData());
            if ($this->Collectors->save($collector)) {
                $this->Flash->success(__('The collector has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collector could not be saved. Please, try again.'));
        }
        $collections = $this->Collectors->Collections->find('list', ['limit' => 200]);
        $this->set(compact('collector', 'collections'));
        $this->set('_serialize', ['collector']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Collector id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $collector = $this->Collectors->get($id, [
            'contain' => ['Collections']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $collector = $this->Collectors->patchEntity($collector, $this->request->getData());
            if ($this->Collectors->save($collector)) {
                $this->Flash->success(__('The collector has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collector could not be saved. Please, try again.'));
        }
        $collections = $this->Collectors->Collections->find('list', ['limit' => 200]);
        $this->set(compact('collector', 'collections'));
        $this->set('_serialize', ['collector']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Collector id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $collector = $this->Collectors->get($id);
        if ($this->Collectors->delete($collector)) {
            $this->Flash->success(__('The collector has been deleted.'));
        } else {
            $this->Flash->error(__('The collector could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
