<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Genres Controller
 *
 * @property \App\Model\Table\GenresTable $Genres
 *
 * @method \App\Model\Entity\Genre[] paginate($object = null, array $settings = [])
 */
class GenresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Families']
        ];
        $genres = $this->paginate($this->Genres);

        $this->set(compact('genres'));
        $this->set('_serialize', ['genres']);
    }

    /**
     * View method
     *
     * @param string|null $id Genre id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genre = $this->Genres->get($id, [
            'contain' => ['Families', 'Species']
        ]);

        $this->set('genre', $genre);
        $this->set('_serialize', ['genre']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genre = $this->Genres->newEntity();
        if ($this->request->is('post')) {
            $genre = $this->Genres->patchEntity($genre, $this->request->getData());
            if ($this->Genres->save($genre)) {
                $this->Flash->success(__('The genre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genre could not be saved. Please, try again.'));
        }
        $families = $this->Genres->Families->find('list', ['limit' => 200]);
        $this->set(compact('genre', 'families'));
        $this->set('_serialize', ['genre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Genre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genre = $this->Genres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genre = $this->Genres->patchEntity($genre, $this->request->getData());
            if ($this->Genres->save($genre)) {
                $this->Flash->success(__('The genre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genre could not be saved. Please, try again.'));
        }
        $families = $this->Genres->Families->find('list', ['limit' => 200]);
        $this->set(compact('genre', 'families'));
        $this->set('_serialize', ['genre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Genre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genre = $this->Genres->get($id);
        if ($this->Genres->delete($genre)) {
            $this->Flash->success(__('The genre has been deleted.'));
        } else {
            $this->Flash->error(__('The genre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
