<?php
declare(strict_types=1);

namespace PHP\Standards\Sniffs\Debug;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

/**
 * Class DebugCodeSniff
 *
 * @package PHP\Standards\EGPB44\Sniffs\Debug
 */
class DebugCodeSniff implements Sniff
{
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return [T_STRING];

    }//end register()


    /**
     * Processes this sniff, when one of its tokens is encountered.
     *
     * @param \PHP_CodeSniffer\Files\File $phpcsFile The file being scanned.
     * @param int                         $stackPtr  The position of the current token in
     *                                               the stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $function = strtolower($tokens[$stackPtr]['content']);
        if ($function === 'debug' || strpos($function, 'debug_') === 0) {
            $error  = 'Call to debug function %s() must be removed';
            $data   = [$tokens[$stackPtr]['content']];
            $phpcsFile->addError($error, $stackPtr, 'Found', $data);
        }
    }//end process()


}//end class