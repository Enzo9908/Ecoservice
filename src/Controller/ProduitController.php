<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produit Controller
 *
 * @property \App\Model\Table\ProduitTable $Produit
 *
 * @method \App\Model\Entity\Produit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProduitController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $produit = $this->paginate($this->Produit);

        $this->set(compact('produit'));
    }

    /**
     * View method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produit = $this->Produit->get($id, [
            'contain' => [],
        ]);

        $this->set('produit', $produit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produit = $this->Produit->newEntity();
        if ($this->request->is('post')) {
            $produit = $this->Produit->patchEntity($produit, $this->request->getData());
            if ($this->Produit->save($produit)) {
                $this->Flash->success(__('The produit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produit could not be saved. Please, try again.'));
        }
        $this->set(compact('produit'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produit = $this->Produit->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produit = $this->Produit->patchEntity($produit, $this->request->getData());
            if ($this->Produit->save($produit)) {
                $this->Flash->success(__('The produit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produit could not be saved. Please, try again.'));
        }
        $this->set(compact('produit'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produit = $this->Produit->get($id);
        if ($this->Produit->delete($produit)) {
            $this->Flash->success(__('The produit has been deleted.'));
        } else {
            $this->Flash->error(__('The produit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
