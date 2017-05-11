# drupal8

In Drupal 7 blocks are defined in hook_block_info(), which returns an array of block description arrays. So it would have been sufficient to return multiple blocks in an array, keyed by the block id,
the available blocks are defined directly in the hook implementation, but they could also come from a database query or from another source, you name it. The important aspect is, that the logic to define multiple blocks was the same as for defining a single block. You just returned more of them. As they all had their proper block ids, which are passed to hook_block_view() or hook_block_configure() they could all be handled independently, but still be defined using the same logic.


Now in Drupal 8 this got more complicated. It took me a while, but finally I found a simple example in the core system module that defines menu blocks. A menu block is structurally exactly what I was after: A block definition that adheres to the same logic, though it can be created by a user in the UI so that you never know in advance how many blocks there will be or what their block ids might be.

That is where derivatives appear on the scene. Might be that this is obvious for someone coming from a strong OO background, but I had never heard of them before, so they didn't catch my attention on the first screening of the core block implementations. For those of you who, just like me, do not know what derivatives are, I will cite a phrase from the documentation:
"Derivatives provide a simple way to expand a single plugin so that it can represent itself as multiple plugins in the user interface."

