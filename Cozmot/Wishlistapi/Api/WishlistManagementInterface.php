<?php
/**
 * Contributor company: Ochobase.
 * Contributor Author : Zaheer Ahmed
 * Date: 25/Aug/2020
 */
namespace Cozmot\Wishlistapi\Api;

/**
 * Interface WishlistManagementInterface
 * @api
 */
interface WishlistManagementInterface
{

    /**
     * Return Wishlist items.
     *
     * @param int $customerId
     * @return array
     */
    public function getWishlistForCustomer($customerId);

    /**
     * Return Added wishlist item.
     *
     * @param int $customerId
     * @param int $productId
     * @return array
     *
     */
    public function addWishlistForCustomer($customerId, $productId);

    /**
     * Return Added wishlist item.
     *
     * @param int $customerId
     * @param int $wishlistId
     * @return array
     *
     */
    public function deleteWishlistForCustomer($customerId, $wishlistItemId);
}