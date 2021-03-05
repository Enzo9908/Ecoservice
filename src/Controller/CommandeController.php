<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Commande Controller
 *
 * @property \App\Model\Table\CommandeTable $Commande
 *
 * @method \App\Model\Entity\Commande[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommandeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $commande = $this->paginate($this->Commande);

        $this->set(compact('commande'));
    }

    /**
     * View method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commande = $this->Commande->get($id, [
            'contain' => [],
        ]);

        $this->set('commande', $commande);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commande = $this->Commande->newEntity();
        if ($this->request->is('post')) {
            $commande = $this->Commande->patchEntity($commande, $this->request->getData());
            if ($this->Commande->save($commande)) {
                $this->Flash->success(__('The commande has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commande could not be saved. Please, try again.'));
        }
        $this->set(compact('commande'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commande = $this->Commande->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commande = $this->Commande->patchEntity($commande, $this->request->getData());
            if ($this->Commande->save($commande)) {
                $this->Flash->success(__('The commande has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commande could not be saved. Please, try again.'));
        }
        $this->set(compact('commande'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commande = $this->Commande->get($id);
        if ($this->Commande->delete($commande)) {
            $this->Flash->success(__('The commande has been deleted.'));
        } else {
            $this->Flash->error(__('The commande could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
