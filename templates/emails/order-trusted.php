Hey, an order just reached 6 confirmations on Bitcoinsymbol.org.

That means you can send it!

Order details:

<?php foreach($order->products() as $product): ?>
# <?= $product->name ?>

- Quantity: <?= $order->get_quantity($product->id) ?>

- Amount: <?= $product->amount_btc ?> BTC

<?php endforeach ?>
# Total: <?= $order->amount_btc() ?> BTC

# Delivery details:

Email: <?= $order->email ?>


Name: <?= $order->name ?>


Address:
<?= $order->address ?>


-- 
Bitcoinsymbol.org
http://bitcoinsymbol.org
