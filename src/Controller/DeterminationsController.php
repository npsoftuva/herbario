<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Determinations Controller
 *
 * @property \App\Model\Table\DeterminationsTable $Determinations
 *
 * @method \App\Model\Entity\Determination[] paginate($object = null, array $settings = [])
 */
class DeterminationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $determinations = $this->paginate($this->Determinations);

        $this->set(compact('determinations'));
        $this->set('_serialize', ['determinations']);
    }

    /**
     * View method
     *
     * @param string|null $id Determination id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $determination = $this->Determinations->get($id, [
            'contain' => ['Collections']
        ]);

        $this->set('determination', $determination);
        $this->set('_serialize', ['determination']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $determination = $this->Determinations->newEntity();
        if ($this->request->is('post')) {
            $determination = $this->Determinations->patchEntity($determination, $this->request->getData());
            if ($this->Determinations->save($determination)) {
                $this->Flash->success(__('The determination has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The determination could not be saved. Please, try again.'));
        }
        $this->set(compact('determination'));
        $this->set('_serialize', ['determination']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Determination id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $determination = $this->Determinations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $determination = $this->Determinations->patchEntity($determination, $this->request->getData());
            if ($this->Determinations->save($determination)) {
                $this->Flash->success(__('The determination has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The determination could not be saved. Please, try again.'));
        }
        $this->set(compact('determination'));
        $this->set('_serialize', ['determination']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Determination id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $determination = $this->Determinations->get($id);
        if ($this->Determinations->delete($determination)) {
            $this->Flash->success(__('The determination has been deleted.'));
        } else {
            $this->Flash->error(__('The determination could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
