<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= h($user->product) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maker') ?></th>
                    <td><?= h($user->maker) ?></td>
                </tr>

                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= h($user->price) ?></td>
                </tr>

                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= h($user->category) ?></td>
                </tr>

                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($user->description) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Articles') ?></h4>
                <?php if (!empty($user->articles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('Published') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->articles as $articles) : ?>
                        <tr>
                            <td><?= h($articles->id) ?></td>
                            <td><?= h($articles->user_id) ?></td>
                            <td><?= h($articles->title) ?></td>
                            <td><?= h($articles->slug) ?></td>
                            <td><?= h($articles->body) ?></td>
                            <td><?= h($articles->published) ?></td>
                            <td><?= h($articles->created) ?></td>
                            <td><?= h($articles->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
