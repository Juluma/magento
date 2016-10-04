# magento
Magento test
- Tasks 1 - 5 completed successfully in about 2hrs. Had some struggle enabling xDebug to previously installed MAMP, but otherwise everything went smoothly. 
- Steps 6 - 10 are described in a nutshell below, and spent 5,5hrs to complete the whole test
- Add a new attribute in magento admin panel
    - Code: delivery_time
    - Used in product listing: Yes
- Assign created attribute to sample product data's "Accessories" attribute set displayed in "General Folder" for admin panel
- Added values for this attribute to a few products (eyeglasses; skus: ace000, ace001 and ace002)
plates to show delivery_time value (if set for product).- Modified list.phtml within created PiiMega templates
- Removed attribute and created installer script /code/community/Piimega/Test. This step took "about" 2 hours to make it work, because first couple of googles recommendations didn't quite do the promised (or was it me?)
- Show attribute value in product grid overwrite /code/community/Piimega/Test/Adminhtml/Block/Catalog/Product/Grid.php