<?php
declare(strict_types=1);
namespace GiocoPlus\DGT\Contract;
/**
 *
 */
interface DGTServiceInterface {

    /**
     * 遊戲啟動
     * @param string $opCode
     * @param string $account
     * @param string $gameCode
     * @param string $language
     * @return mixed
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $language);

    /**
     * 遊戲詳情
     * @param string $opCode
     * @param string $account
     * @param string $betId
     * @param string $language
     * @return mixed
     */
    function gameDetail(string $opCode, string $account, string $betId, string $language = 'en');
}

