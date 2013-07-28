<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 * @generated
 * @phutil-library-version 2
 */

phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' =>
  array(
    'AASTNode' => 'parser/aast/api/AASTNode.php',
    'AASTNodeList' => 'parser/aast/api/AASTNodeList.php',
    'AASTToken' => 'parser/aast/api/AASTToken.php',
    'AASTTree' => 'parser/aast/api/AASTTree.php',
    'AbstractDirectedGraph' => 'utils/AbstractDirectedGraph.php',
    'AbstractDirectedGraphTestCase' => 'utils/__tests__/AbstractDirectedGraphTestCase.php',
    'AphrontDatabaseConnection' => 'aphront/storage/connection/AphrontDatabaseConnection.php',
    'AphrontDatabaseTransactionState' => 'aphront/storage/connection/AphrontDatabaseTransactionState.php',
    'AphrontIsolatedDatabaseConnection' => 'aphront/storage/connection/AphrontIsolatedDatabaseConnection.php',
    'AphrontMySQLDatabaseConnection' => 'aphront/storage/connection/mysql/AphrontMySQLDatabaseConnection.php',
    'AphrontMySQLDatabaseConnectionBase' => 'aphront/storage/connection/mysql/AphrontMySQLDatabaseConnectionBase.php',
    'AphrontMySQLiDatabaseConnection' => 'aphront/storage/connection/mysql/AphrontMySQLiDatabaseConnection.php',
    'AphrontQueryAccessDeniedException' => 'aphront/storage/exception/AphrontQueryAccessDeniedException.php',
    'AphrontQueryConnectionException' => 'aphront/storage/exception/AphrontQueryConnectionException.php',
    'AphrontQueryConnectionLostException' => 'aphront/storage/exception/AphrontQueryConnectionLostException.php',
    'AphrontQueryCountException' => 'aphront/storage/exception/AphrontQueryCountException.php',
    'AphrontQueryDeadlockException' => 'aphront/storage/exception/AphrontQueryDeadlockException.php',
    'AphrontQueryDuplicateKeyException' => 'aphront/storage/exception/AphrontQueryDuplicateKeyException.php',
    'AphrontQueryException' => 'aphront/storage/exception/AphrontQueryException.php',
    'AphrontQueryNotSupportedException' => 'aphront/storage/exception/AphrontQueryNotSupportedException.php',
    'AphrontQueryObjectMissingException' => 'aphront/storage/exception/AphrontQueryObjectMissingException.php',
    'AphrontQueryParameterException' => 'aphront/storage/exception/AphrontQueryParameterException.php',
    'AphrontQueryRecoverableException' => 'aphront/storage/exception/AphrontQueryRecoverableException.php',
    'AphrontQuerySchemaException' => 'aphront/storage/exception/AphrontQuerySchemaException.php',
    'AphrontScopedUnguardedWriteCapability' => 'aphront/writeguard/AphrontScopedUnguardedWriteCapability.php',
    'AphrontWriteGuard' => 'aphront/writeguard/AphrontWriteGuard.php',
    'AphrontWriteGuardExitEventListener' => 'aphront/writeguard/event/AphrontWriteGuardExitEventListener.php',
    'BaseHTTPFuture' => 'future/http/BaseHTTPFuture.php',
    'CommandException' => 'future/exec/CommandException.php',
    'ConduitClient' => 'conduit/ConduitClient.php',
    'ConduitClientException' => 'conduit/ConduitClientException.php',
    'ConduitFuture' => 'conduit/ConduitFuture.php',
    'ExecFuture' => 'future/exec/ExecFuture.php',
    'ExecFutureTestCase' => 'future/exec/__tests__/ExecFutureTestCase.php',
    'FileFinder' => 'filesystem/FileFinder.php',
    'FileFinderTestCase' => 'filesystem/__tests__/FileFinderTestCase.php',
    'FileList' => 'filesystem/FileList.php',
    'Filesystem' => 'filesystem/Filesystem.php',
    'FilesystemException' => 'filesystem/FilesystemException.php',
    'FilesystemTestCase' => 'filesystem/__tests__/FilesystemTestCase.php',
    'Future' => 'future/Future.php',
    'FutureIterator' => 'future/FutureIterator.php',
    'FutureIteratorTestCase' => 'future/__tests__/FutureIteratorTestCase.php',
    'FutureProxy' => 'future/FutureProxy.php',
    'HTTPFuture' => 'future/http/HTTPFuture.php',
    'HTTPFutureResponseStatus' => 'future/http/status/HTTPFutureResponseStatus.php',
    'HTTPFutureResponseStatusCURL' => 'future/http/status/HTTPFutureResponseStatusCURL.php',
    'HTTPFutureResponseStatusHTTP' => 'future/http/status/HTTPFutureResponseStatusHTTP.php',
    'HTTPFutureResponseStatusParse' => 'future/http/status/HTTPFutureResponseStatusParse.php',
    'HTTPFutureResponseStatusTransport' => 'future/http/status/HTTPFutureResponseStatusTransport.php',
    'HTTPSFuture' => 'future/http/HTTPSFuture.php',
    'ImmediateFuture' => 'future/ImmediateFuture.php',
    'LinesOfALarge' => 'filesystem/linesofalarge/LinesOfALarge.php',
    'LinesOfALargeExecFuture' => 'filesystem/linesofalarge/LinesOfALargeExecFuture.php',
    'LinesOfALargeExecFutureTestCase' => 'filesystem/linesofalarge/__tests__/LinesOfALargeExecFutureTestCase.php',
    'LinesOfALargeFile' => 'filesystem/linesofalarge/LinesOfALargeFile.php',
    'LinesOfALargeFileTestCase' => 'filesystem/linesofalarge/__tests__/LinesOfALargeFileTestCase.php',
    'MFilterTestHelper' => 'utils/__tests__/MFilterTestHelper.php',
    'PhageAgentBootloader' => 'phage/bootloader/PhageAgentBootloader.php',
    'PhageAgentTestCase' => 'phage/__tests__/PhageAgentTestCase.php',
    'PhagePHPAgent' => 'phage/agent/PhagePHPAgent.php',
    'PhagePHPAgentBootloader' => 'phage/bootloader/PhagePHPAgentBootloader.php',
    'Phobject' => 'object/Phobject.php',
    'PhutilAWSEC2Future' => 'future/aws/PhutilAWSEC2Future.php',
    'PhutilAWSException' => 'future/aws/PhutilAWSException.php',
    'PhutilAWSFuture' => 'future/aws/PhutilAWSFuture.php',
    'PhutilAggregateException' => 'error/PhutilAggregateException.php',
    'PhutilArgumentParser' => 'parser/argument/PhutilArgumentParser.php',
    'PhutilArgumentParserException' => 'parser/argument/exception/PhutilArgumentParserException.php',
    'PhutilArgumentParserTestCase' => 'parser/argument/__tests__/PhutilArgumentParserTestCase.php',
    'PhutilArgumentSpecification' => 'parser/argument/PhutilArgumentSpecification.php',
    'PhutilArgumentSpecificationException' => 'parser/argument/exception/PhutilArgumentSpecificationException.php',
    'PhutilArgumentSpecificationTestCase' => 'parser/argument/__tests__/PhutilArgumentSpecificationTestCase.php',
    'PhutilArgumentUsageException' => 'parser/argument/exception/PhutilArgumentUsageException.php',
    'PhutilArgumentWorkflow' => 'parser/argument/workflow/PhutilArgumentWorkflow.php',
    'PhutilArray' => 'utils/PhutilArray.php',
    'PhutilArrayTestCase' => 'utils/__tests__/PhutilArrayTestCase.php',
    'PhutilArrayWithDefaultValue' => 'utils/PhutilArrayWithDefaultValue.php',
    'PhutilAsanaFuture' => 'future/asana/PhutilAsanaFuture.php',
    'PhutilAuthAdapter' => 'auth/PhutilAuthAdapter.php',
    'PhutilAuthAdapterEmpty' => 'auth/PhutilAuthAdapterEmpty.php',
    'PhutilAuthAdapterLDAP' => 'auth/PhutilAuthAdapterLDAP.php',
    'PhutilAuthAdapterOAuth' => 'auth/PhutilAuthAdapterOAuth.php',
    'PhutilAuthAdapterOAuthAmazon' => 'auth/PhutilAuthAdapterOAuthAmazon.php',
    'PhutilAuthAdapterOAuthAsana' => 'auth/PhutilAuthAdapterOAuthAsana.php',
    'PhutilAuthAdapterOAuthDisqus' => 'auth/PhutilAuthAdapterOAuthDisqus.php',
    'PhutilAuthAdapterOAuthFacebook' => 'auth/PhutilAuthAdapterOAuthFacebook.php',
    'PhutilAuthAdapterOAuthGitHub' => 'auth/PhutilAuthAdapterOAuthGitHub.php',
    'PhutilAuthAdapterOAuthGoogle' => 'auth/PhutilAuthAdapterOAuthGoogle.php',
    'PhutilBallOfPHP' => 'phage/util/PhutilBallOfPHP.php',
    'PhutilBufferedIterator' => 'utils/PhutilBufferedIterator.php',
    'PhutilBufferedIteratorExample' => 'utils/PhutilBufferedIteratorExample.php',
    'PhutilBufferedIteratorTestCase' => 'utils/__tests__/PhutilBufferedIteratorTestCase.php',
    'PhutilCLikeCodeSnippetContextFreeGrammar' => 'grammar/code/PhutilCLikeCodeSnippetContextFreeGrammar.php',
    'PhutilCallbackFilterIterator' => 'utils/PhutilCallbackFilterIterator.php',
    'PhutilChannel' => 'channel/PhutilChannel.php',
    'PhutilChannelChannel' => 'channel/PhutilChannelChannel.php',
    'PhutilChunkedIterator' => 'utils/PhutilChunkedIterator.php',
    'PhutilChunkedIteratorTestCase' => 'utils/__tests__/PhutilChunkedIteratorTestCase.php',
    'PhutilCodeSnippetContextFreeGrammar' => 'grammar/code/PhutilCodeSnippetContextFreeGrammar.php',
    'PhutilCommandString' => 'xsprintf/PhutilCommandString.php',
    'PhutilConsole' => 'console/PhutilConsole.php',
    'PhutilConsoleFormatter' => 'console/PhutilConsoleFormatter.php',
    'PhutilConsoleMessage' => 'console/PhutilConsoleMessage.php',
    'PhutilConsoleServer' => 'console/PhutilConsoleServer.php',
    'PhutilConsoleServerChannel' => 'console/PhutilConsoleServerChannel.php',
    'PhutilConsoleStdinNotInteractiveException' => 'console/PhutilConsoleStdinNotInteractiveException.php',
    'PhutilConsoleSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilConsoleSyntaxHighlighter.php',
    'PhutilConsoleWrapTestCase' => 'console/__tests__/PhutilConsoleWrapTestCase.php',
    'PhutilContextFreeGrammar' => 'grammar/PhutilContextFreeGrammar.php',
    'PhutilDaemon' => 'daemon/PhutilDaemon.php',
    'PhutilDaemonOverseer' => 'daemon/PhutilDaemonOverseer.php',
    'PhutilDefaultSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilDefaultSyntaxHighlighter.php',
    'PhutilDefaultSyntaxHighlighterEngine' => 'markup/syntax/engine/PhutilDefaultSyntaxHighlighterEngine.php',
    'PhutilDefaultSyntaxHighlighterEnginePygmentsFuture' => 'markup/syntax/highlighter/pygments/PhutilDefaultSyntaxHighlighterEnginePygmentsFuture.php',
    'PhutilDefaultSyntaxHighlighterEngineTestCase' => 'markup/syntax/engine/__tests__/PhutilDefaultSyntaxHighlighterEngineTestCase.php',
    'PhutilDeferredLog' => 'filesystem/PhutilDeferredLog.php',
    'PhutilDeferredLogTestCase' => 'filesystem/__tests__/PhutilDeferredLogTestCase.php',
    'PhutilDirectoryFixture' => 'filesystem/PhutilDirectoryFixture.php',
    'PhutilDivinerSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilDivinerSyntaxHighlighter.php',
    'PhutilDocblockParser' => 'parser/PhutilDocblockParser.php',
    'PhutilDocblockParserTestCase' => 'parser/__tests__/PhutilDocblockParserTestCase.php',
    'PhutilEditDistanceMatrix' => 'utils/PhutilEditDistanceMatrix.php',
    'PhutilEditDistanceMatrixTestCase' => 'utils/__tests__/PhutilEditDistanceMatrixTestCase.php',
    'PhutilEmailAddress' => 'parser/PhutilEmailAddress.php',
    'PhutilEmailAddressTestCase' => 'parser/__tests__/PhutilEmailAddressTestCase.php',
    'PhutilErrorHandler' => 'error/PhutilErrorHandler.php',
    'PhutilErrorHandlerTestCase' => 'error/__tests__/PhutilErrorHandlerTestCase.php',
    'PhutilEvent' => 'events/PhutilEvent.php',
    'PhutilEventConstants' => 'events/constant/PhutilEventConstants.php',
    'PhutilEventEngine' => 'events/PhutilEventEngine.php',
    'PhutilEventListener' => 'events/PhutilEventListener.php',
    'PhutilEventType' => 'events/constant/PhutilEventType.php',
    'PhutilExcessiveServiceCallsDaemon' => 'daemon/torture/PhutilExcessiveServiceCallsDaemon.php',
    'PhutilExecChannel' => 'channel/PhutilExecChannel.php',
    'PhutilExtensionsTestCase' => 'moduleutils/__tests__/PhutilExtensionsTestCase.php',
    'PhutilFatalDaemon' => 'daemon/torture/PhutilFatalDaemon.php',
    'PhutilFileLock' => 'filesystem/PhutilFileLock.php',
    'PhutilFileLockTestCase' => 'filesystem/__tests__/PhutilFileLockTestCase.php',
    'PhutilFileTree' => 'filesystem/PhutilFileTree.php',
    'PhutilGitURI' => 'parser/PhutilGitURI.php',
    'PhutilGitURITestCase' => 'parser/__tests__/PhutilGitURITestCase.php',
    'PhutilHangForeverDaemon' => 'daemon/torture/PhutilHangForeverDaemon.php',
    'PhutilHelpArgumentWorkflow' => 'parser/argument/workflow/PhutilHelpArgumentWorkflow.php',
    'PhutilInteractiveEditor' => 'console/PhutilInteractiveEditor.php',
    'PhutilInvisibleSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilInvisibleSyntaxHighlighter.php',
    'PhutilJSON' => 'parser/PhutilJSON.php',
    'PhutilJSONProtocolChannel' => 'channel/PhutilJSONProtocolChannel.php',
    'PhutilJSONProtocolChannelTestCase' => 'channel/__tests__/PhutilJSONProtocolChannelTestCase.php',
    'PhutilJSONTestCase' => 'parser/__tests__/PhutilJSONTestCase.php',
    'PhutilJavaCodeSnippetContextFreeGrammar' => 'grammar/code/PhutilJavaCodeSnippetContextFreeGrammar.php',
    'PhutilKeyValueCache' => 'cache/PhutilKeyValueCache.php',
    'PhutilKeyValueCacheAPC' => 'cache/PhutilKeyValueCacheAPC.php',
    'PhutilKeyValueCacheDirectory' => 'cache/PhutilKeyValueCacheDirectory.php',
    'PhutilKeyValueCacheInRequest' => 'cache/PhutilKeyValueCacheInRequest.php',
    'PhutilKeyValueCacheMemcache' => 'cache/PhutilKeyValueCacheMemcache.php',
    'PhutilKeyValueCacheNamespace' => 'cache/PhutilKeyValueCacheNamespace.php',
    'PhutilKeyValueCacheOnDisk' => 'cache/PhutilKeyValueCacheOnDisk.php',
    'PhutilKeyValueCacheProfiler' => 'cache/PhutilKeyValueCacheProfiler.php',
    'PhutilKeyValueCacheProxy' => 'cache/PhutilKeyValueCacheProxy.php',
    'PhutilKeyValueCacheStack' => 'cache/PhutilKeyValueCacheStack.php',
    'PhutilKeyValueCacheTestCase' => 'cache/__tests__/PhutilKeyValueCacheTestCase.php',
    'PhutilLanguageGuesser' => 'parser/PhutilLanguageGuesser.php',
    'PhutilLanguageGuesserTestCase' => 'parser/__tests__/PhutilLanguageGuesserTestCase.php',
    'PhutilLexer' => 'lexer/PhutilLexer.php',
    'PhutilLexerSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilLexerSyntaxHighlighter.php',
    'PhutilLipsumContextFreeGrammar' => 'grammar/PhutilLipsumContextFreeGrammar.php',
    'PhutilLock' => 'filesystem/PhutilLock.php',
    'PhutilLockException' => 'filesystem/PhutilLockException.php',
    'PhutilMarkupEngine' => 'markup/PhutilMarkupEngine.php',
    'PhutilMarkupTestCase' => 'markup/__tests__/PhutilMarkupTestCase.php',
    'PhutilMetricsChannel' => 'channel/PhutilMetricsChannel.php',
    'PhutilMissingSymbolException' => 'symbols/exception/PhutilMissingSymbolException.php',
    'PhutilNiceDaemon' => 'daemon/torture/PhutilNiceDaemon.php',
    'PhutilNumber' => 'internationalization/PhutilNumber.php',
    'PhutilOpaqueEnvelope' => 'error/PhutilOpaqueEnvelope.php',
    'PhutilOpaqueEnvelopeKey' => 'error/PhutilOpaqueEnvelopeKey.php',
    'PhutilOpaqueEnvelopeTestCase' => 'error/__tests__/PhutilOpaqueEnvelopeTestCase.php',
    'PhutilPHPCodeSnippetContextFreeGrammar' => 'grammar/code/PhutilPHPCodeSnippetContextFreeGrammar.php',
    'PhutilPHPFragmentLexer' => 'lexer/PhutilPHPFragmentLexer.php',
    'PhutilPHPFragmentLexerHighlighterTestCase' => 'markup/syntax/highlighter/__tests__/PhutilPHPFragmentLexerHighlighterTestCase.php',
    'PhutilPHPFragmentLexerTestCase' => 'lexer/__tests__/PhutilPHPFragmentLexerTestCase.php',
    'PhutilPHPObjectProtocolChannel' => 'channel/PhutilPHPObjectProtocolChannel.php',
    'PhutilPHPObjectProtocolChannelTestCase' => 'channel/__tests__/PhutilPHPObjectProtocolChannelTestCase.php',
    'PhutilPHTTestCase' => 'internationalization/__tests__/PhutilPHTTestCase.php',
    'PhutilPayPalAPIFuture' => 'future/paypal/PhutilPayPalAPIFuture.php',
    'PhutilPerson' => 'internationalization/PhutilPerson.php',
    'PhutilPersonTest' => 'internationalization/__tests__/PhutilPersonTest.php',
    'PhutilProcessGroupDaemon' => 'daemon/torture/PhutilProcessGroupDaemon.php',
    'PhutilProtocolChannel' => 'channel/PhutilProtocolChannel.php',
    'PhutilProxyException' => 'error/PhutilProxyException.php',
    'PhutilPygmentsSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilPygmentsSyntaxHighlighter.php',
    'PhutilQsprintfInterface' => 'xsprintf/PhutilQsprintfInterface.php',
    'PhutilQueryStringParser' => 'parser/PhutilQueryStringParser.php',
    'PhutilQueryStringParserTestCase' => 'parser/__tests__/PhutilQueryStringParserTestCase.php',
    'PhutilRainbowSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilRainbowSyntaxHighlighter.php',
    'PhutilReadableSerializer' => 'readableserializer/PhutilReadableSerializer.php',
    'PhutilReadableSerializerTestCase' => 'readableserializer/__tests__/PhutilReadableSerializerTestCase.php',
    'PhutilRealnameContextFreeGrammar' => 'grammar/PhutilRealnameContextFreeGrammar.php',
    'PhutilRemarkupBlockStorage' => 'markup/engine/remarkup/PhutilRemarkupBlockStorage.php',
    'PhutilRemarkupEngine' => 'markup/engine/PhutilRemarkupEngine.php',
    'PhutilRemarkupEngineBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineBlockRule.php',
    'PhutilRemarkupEngineRemarkupCodeBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupCodeBlockRule.php',
    'PhutilRemarkupEngineRemarkupDefaultBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupDefaultBlockRule.php',
    'PhutilRemarkupEngineRemarkupHeaderBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupHeaderBlockRule.php',
    'PhutilRemarkupEngineRemarkupHorizontalRuleBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupHorizontalRuleBlockRule.php',
    'PhutilRemarkupEngineRemarkupInlineBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupInlineBlockRule.php',
    'PhutilRemarkupEngineRemarkupListBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupListBlockRule.php',
    'PhutilRemarkupEngineRemarkupLiteralBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupLiteralBlockRule.php',
    'PhutilRemarkupEngineRemarkupNoteBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupNoteBlockRule.php',
    'PhutilRemarkupEngineRemarkupQuotesBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupQuotesBlockRule.php',
    'PhutilRemarkupEngineRemarkupSimpleTableBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupSimpleTableBlockRule.php',
    'PhutilRemarkupEngineRemarkupTableBlockRule' => 'markup/engine/remarkup/blockrule/PhutilRemarkupEngineRemarkupTableBlockRule.php',
    'PhutilRemarkupEngineTestCase' => 'markup/engine/__tests__/PhutilRemarkupEngineTestCase.php',
    'PhutilRemarkupRule' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRule.php',
    'PhutilRemarkupRuleBold' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRuleBold.php',
    'PhutilRemarkupRuleDel' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRuleDel.php',
    'PhutilRemarkupRuleDocumentLink' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRuleDocumentLink.php',
    'PhutilRemarkupRuleEscapeRemarkup' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRuleEscapeRemarkup.php',
    'PhutilRemarkupRuleHyperlink' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRuleHyperlink.php',
    'PhutilRemarkupRuleItalic' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRuleItalic.php',
    'PhutilRemarkupRuleLinebreaks' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRuleLinebreaks.php',
    'PhutilRemarkupRuleMonospace' => 'markup/engine/remarkup/markuprule/PhutilRemarkupRuleMonospace.php',
    'PhutilSafeHTML' => 'markup/PhutilSafeHTML.php',
    'PhutilSafeHTMLProducerInterface' => 'markup/PhutilSafeHTMLProducerInterface.php',
    'PhutilSaturateStdoutDaemon' => 'daemon/torture/PhutilSaturateStdoutDaemon.php',
    'PhutilServiceProfiler' => 'serviceprofiler/PhutilServiceProfiler.php',
    'PhutilShellLexer' => 'lexer/PhutilShellLexer.php',
    'PhutilShellLexerTestCase' => 'lexer/__tests__/PhutilShellLexerTestCase.php',
    'PhutilSimpleOptions' => 'parser/PhutilSimpleOptions.php',
    'PhutilSimpleOptionsLexer' => 'lexer/PhutilSimpleOptionsLexer.php',
    'PhutilSimpleOptionsLexerTestCase' => 'lexer/__tests__/PhutilSimpleOptionsLexerTestCase.php',
    'PhutilSimpleOptionsTestCase' => 'parser/__tests__/PhutilSimpleOptionsTestCase.php',
    'PhutilSocketChannel' => 'channel/PhutilSocketChannel.php',
    'PhutilSprite' => 'sprites/PhutilSprite.php',
    'PhutilSpriteSheet' => 'sprites/PhutilSpriteSheet.php',
    'PhutilSymbolLoader' => 'symbols/PhutilSymbolLoader.php',
    'PhutilSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilSyntaxHighlighter.php',
    'PhutilSyntaxHighlighterEngine' => 'markup/syntax/engine/PhutilSyntaxHighlighterEngine.php',
    'PhutilSyntaxHighlighterException' => 'markup/syntax/highlighter/PhutilSyntaxHighlighterException.php',
    'PhutilTestCase' => 'infrastructure/testing/PhutilTestCase.php',
    'PhutilTortureTestDaemon' => 'daemon/torture/PhutilTortureTestDaemon.php',
    'PhutilTranslator' => 'internationalization/PhutilTranslator.php',
    'PhutilTranslatorTestCase' => 'internationalization/__tests__/PhutilTranslatorTestCase.php',
    'PhutilURI' => 'parser/PhutilURI.php',
    'PhutilURITestCase' => 'parser/__tests__/PhutilURITestCase.php',
    'PhutilUTF8TestCase' => 'utils/__tests__/PhutilUTF8TestCase.php',
    'PhutilUtilsTestCase' => 'utils/__tests__/PhutilUtilsTestCase.php',
    'PhutilXHPASTSyntaxHighlighter' => 'markup/syntax/highlighter/PhutilXHPASTSyntaxHighlighter.php',
    'PhutilXHPASTSyntaxHighlighterFuture' => 'markup/syntax/highlighter/xhpast/PhutilXHPASTSyntaxHighlighterFuture.php',
    'PhutilXHPASTSyntaxHighlighterTestCase' => 'markup/syntax/highlighter/__tests__/PhutilXHPASTSyntaxHighlighterTestCase.php',
    'PhutilcsprintfTestCase' => 'xsprintf/__tests__/PhutilcsprintfTestCase.php',
    'PhutilxsprintfTestCase' => 'xsprintf/__tests__/PhutilxsprintfTestCase.php',
    'QueryFuture' => 'future/query/QueryFuture.php',
    'TempFile' => 'filesystem/TempFile.php',
    'TestAbstractDirectedGraph' => 'utils/__tests__/TestAbstractDirectedGraph.php',
    'XHPASTNode' => 'parser/xhpast/api/XHPASTNode.php',
    'XHPASTNodeTestCase' => 'parser/xhpast/api/__tests__/XHPASTNodeTestCase.php',
    'XHPASTSyntaxErrorException' => 'parser/xhpast/api/XHPASTSyntaxErrorException.php',
    'XHPASTToken' => 'parser/xhpast/api/XHPASTToken.php',
    'XHPASTTree' => 'parser/xhpast/api/XHPASTTree.php',
    'XHPASTTreeTestCase' => 'parser/xhpast/api/__tests__/XHPASTTreeTestCase.php',
  ),
  'function' =>
  array(
    'Futures' => 'future/functions.php',
    '_qsprintf_check_scalar_type' => 'xsprintf/qsprintf.php',
    '_qsprintf_check_type' => 'xsprintf/qsprintf.php',
    'array_fuse' => 'utils/utils.php',
    'array_interleave' => 'utils/utils.php',
    'array_mergev' => 'utils/utils.php',
    'array_select_keys' => 'utils/utils.php',
    'assert_instances_of' => 'utils/utils.php',
    'assert_stringlike' => 'utils/utils.php',
    'coalesce' => 'utils/utils.php',
    'csprintf' => 'xsprintf/csprintf.php',
    'exec_manual' => 'future/exec/execx.php',
    'execx' => 'future/exec/execx.php',
    'head' => 'utils/utils.php',
    'head_key' => 'utils/utils.php',
    'hgsprintf' => 'xsprintf/hgsprintf.php',
    'hsprintf' => 'markup/render.php',
    'id' => 'utils/utils.php',
    'idx' => 'utils/utils.php',
    'ifilter' => 'utils/utils.php',
    'igroup' => 'utils/utils.php',
    'ipull' => 'utils/utils.php',
    'isort' => 'utils/utils.php',
    'jsprintf' => 'xsprintf/jsprintf.php',
    'last' => 'utils/utils.php',
    'last_key' => 'utils/utils.php',
    'ldap_sprintf' => 'xsprintf/ldapsprintf.php',
    'mfilter' => 'utils/utils.php',
    'mgroup' => 'utils/utils.php',
    'mpull' => 'utils/utils.php',
    'msort' => 'utils/utils.php',
    'newv' => 'utils/utils.php',
    'nonempty' => 'utils/utils.php',
    'phlog' => 'error/phlog.php',
    'pht' => 'internationalization/pht.php',
    'phutil_console_confirm' => 'console/format.php',
    'phutil_console_format' => 'console/format.php',
    'phutil_console_get_terminal_width' => 'console/format.php',
    'phutil_console_prompt' => 'console/format.php',
    'phutil_console_require_tty' => 'console/format.php',
    'phutil_console_wrap' => 'console/format.php',
    'phutil_deprecated' => 'moduleutils/moduleutils.php',
    'phutil_error_listener_example' => 'error/phlog.php',
    'phutil_escape_html' => 'markup/render.php',
    'phutil_escape_html_newlines' => 'markup/render.php',
    'phutil_escape_uri' => 'markup/render.php',
    'phutil_escape_uri_path_component' => 'markup/render.php',
    'phutil_exit' => 'utils/utils.php',
    'phutil_get_library_name_for_root' => 'moduleutils/moduleutils.php',
    'phutil_get_library_root' => 'moduleutils/moduleutils.php',
    'phutil_get_library_root_for_path' => 'moduleutils/moduleutils.php',
    'phutil_get_signal_name' => 'future/exec/execx.php',
    'phutil_implode_html' => 'markup/render.php',
    'phutil_is_hiphop_runtime' => 'utils/utils.php',
    'phutil_is_utf8' => 'utils/utf8.php',
    'phutil_is_windows' => 'utils/utils.php',
    'phutil_passthru' => 'future/exec/execx.php',
    'phutil_safe_html' => 'markup/render.php',
    'phutil_split_lines' => 'utils/utils.php',
    'phutil_tag' => 'markup/render.php',
    'phutil_unescape_uri_path_component' => 'markup/render.php',
    'phutil_utf8_console_strlen' => 'utils/utf8.php',
    'phutil_utf8_convert' => 'utils/utf8.php',
    'phutil_utf8_hard_wrap' => 'utils/utf8.php',
    'phutil_utf8_hard_wrap_html' => 'utils/utf8.php',
    'phutil_utf8_is_combining_character' => 'utils/utf8.php',
    'phutil_utf8_shorten' => 'utils/utf8.php',
    'phutil_utf8_strlen' => 'utils/utf8.php',
    'phutil_utf8_strtolower' => 'utils/utf8.php',
    'phutil_utf8_strtoupper' => 'utils/utf8.php',
    'phutil_utf8_strtr' => 'utils/utf8.php',
    'phutil_utf8_ucwords' => 'utils/utf8.php',
    'phutil_utf8ize' => 'utils/utf8.php',
    'phutil_utf8v' => 'utils/utf8.php',
    'phutil_utf8v_codepoints' => 'utils/utf8.php',
    'phutil_utf8v_combined' => 'utils/utf8.php',
    'ppull' => 'utils/utils.php',
    'qsprintf' => 'xsprintf/qsprintf.php',
    'queryfx' => 'xsprintf/queryfx.php',
    'queryfx_all' => 'xsprintf/queryfx.php',
    'queryfx_one' => 'xsprintf/queryfx.php',
    'vcsprintf' => 'xsprintf/csprintf.php',
    'vjsprintf' => 'xsprintf/jsprintf.php',
    'vqsprintf' => 'xsprintf/qsprintf.php',
    'vqueryfx' => 'xsprintf/queryfx.php',
    'vqueryfx_all' => 'xsprintf/queryfx.php',
    'xhp_parser_node_constants' => 'parser/xhpast/parser_nodes.php',
    'xhpast_get_binary_path' => 'parser/xhpast/bin/xhpast_parse.php',
    'xhpast_get_build_instructions' => 'parser/xhpast/bin/xhpast_parse.php',
    'xhpast_get_parser_future' => 'parser/xhpast/bin/xhpast_parse.php',
    'xhpast_is_available' => 'parser/xhpast/bin/xhpast_parse.php',
    'xhpast_parser_token_constants' => 'parser/xhpast/parser_tokens.php',
    'xsprintf' => 'xsprintf/xsprintf.php',
    'xsprintf_callback_example' => 'xsprintf/xsprintf.php',
    'xsprintf_command' => 'xsprintf/csprintf.php',
    'xsprintf_javascript' => 'xsprintf/jsprintf.php',
    'xsprintf_ldap' => 'xsprintf/ldapsprintf.php',
    'xsprintf_mercurial' => 'xsprintf/hgsprintf.php',
    'xsprintf_query' => 'xsprintf/qsprintf.php',
  ),
  'xmap' =>
  array(
    'AASTNodeList' =>
    array(
      0 => 'Iterator',
      1 => 'Countable',
    ),
    'AbstractDirectedGraphTestCase' => 'PhutilTestCase',
    'AphrontDatabaseConnection' => 'PhutilQsprintfInterface',
    'AphrontIsolatedDatabaseConnection' => 'AphrontDatabaseConnection',
    'AphrontMySQLDatabaseConnection' => 'AphrontMySQLDatabaseConnectionBase',
    'AphrontMySQLDatabaseConnectionBase' => 'AphrontDatabaseConnection',
    'AphrontMySQLiDatabaseConnection' => 'AphrontMySQLDatabaseConnectionBase',
    'AphrontQueryAccessDeniedException' => 'AphrontQueryRecoverableException',
    'AphrontQueryConnectionException' => 'AphrontQueryException',
    'AphrontQueryConnectionLostException' => 'AphrontQueryRecoverableException',
    'AphrontQueryCountException' => 'AphrontQueryException',
    'AphrontQueryDeadlockException' => 'AphrontQueryRecoverableException',
    'AphrontQueryDuplicateKeyException' => 'AphrontQueryException',
    'AphrontQueryException' => 'Exception',
    'AphrontQueryNotSupportedException' => 'AphrontQueryException',
    'AphrontQueryObjectMissingException' => 'AphrontQueryException',
    'AphrontQueryParameterException' => 'AphrontQueryException',
    'AphrontQueryRecoverableException' => 'AphrontQueryException',
    'AphrontQuerySchemaException' => 'AphrontQueryException',
    'AphrontWriteGuardExitEventListener' => 'PhutilEventListener',
    'BaseHTTPFuture' => 'Future',
    'CommandException' => 'Exception',
    'ConduitClientException' => 'Exception',
    'ConduitFuture' => 'FutureProxy',
    'ExecFuture' => 'Future',
    'ExecFutureTestCase' => 'PhutilTestCase',
    'FileFinderTestCase' => 'PhutilTestCase',
    'FilesystemException' => 'Exception',
    'FilesystemTestCase' => 'PhutilTestCase',
    'FutureIterator' => 'Iterator',
    'FutureIteratorTestCase' => 'PhutilTestCase',
    'FutureProxy' => 'Future',
    'HTTPFuture' => 'BaseHTTPFuture',
    'HTTPFutureResponseStatus' => 'Exception',
    'HTTPFutureResponseStatusCURL' => 'HTTPFutureResponseStatus',
    'HTTPFutureResponseStatusHTTP' => 'HTTPFutureResponseStatus',
    'HTTPFutureResponseStatusParse' => 'HTTPFutureResponseStatus',
    'HTTPFutureResponseStatusTransport' => 'HTTPFutureResponseStatus',
    'HTTPSFuture' => 'BaseHTTPFuture',
    'ImmediateFuture' => 'Future',
    'LinesOfALarge' => 'Iterator',
    'LinesOfALargeExecFuture' => 'LinesOfALarge',
    'LinesOfALargeExecFutureTestCase' => 'PhutilTestCase',
    'LinesOfALargeFile' => 'LinesOfALarge',
    'LinesOfALargeFileTestCase' => 'PhutilTestCase',
    'PhageAgentTestCase' => 'PhutilTestCase',
    'PhagePHPAgentBootloader' => 'PhageAgentBootloader',
    'PhutilAWSEC2Future' => 'PhutilAWSFuture',
    'PhutilAWSException' => 'Exception',
    'PhutilAWSFuture' => 'FutureProxy',
    'PhutilAggregateException' => 'Exception',
    'PhutilArgumentParserException' => 'Exception',
    'PhutilArgumentParserTestCase' => 'PhutilTestCase',
    'PhutilArgumentSpecificationException' => 'PhutilArgumentParserException',
    'PhutilArgumentSpecificationTestCase' => 'PhutilTestCase',
    'PhutilArgumentUsageException' => 'PhutilArgumentParserException',
    'PhutilArray' =>
    array(
      0 => 'Phobject',
      1 => 'Countable',
      2 => 'ArrayAccess',
      3 => 'Iterator',
    ),
    'PhutilArrayTestCase' => 'PhutilTestCase',
    'PhutilArrayWithDefaultValue' => 'PhutilArray',
    'PhutilAsanaFuture' => 'FutureProxy',
    'PhutilAuthAdapterEmpty' => 'PhutilAuthAdapter',
    'PhutilAuthAdapterLDAP' => 'PhutilAuthAdapter',
    'PhutilAuthAdapterOAuth' => 'PhutilAuthAdapter',
    'PhutilAuthAdapterOAuthAmazon' => 'PhutilAuthAdapterOAuth',
    'PhutilAuthAdapterOAuthAsana' => 'PhutilAuthAdapterOAuth',
    'PhutilAuthAdapterOAuthDisqus' => 'PhutilAuthAdapterOAuth',
    'PhutilAuthAdapterOAuthFacebook' => 'PhutilAuthAdapterOAuth',
    'PhutilAuthAdapterOAuthGitHub' => 'PhutilAuthAdapterOAuth',
    'PhutilAuthAdapterOAuthGoogle' => 'PhutilAuthAdapterOAuth',
    'PhutilBufferedIterator' => 'Iterator',
    'PhutilBufferedIteratorExample' => 'PhutilBufferedIterator',
    'PhutilBufferedIteratorTestCase' => 'PhutilTestCase',
    'PhutilCLikeCodeSnippetContextFreeGrammar' => 'PhutilCodeSnippetContextFreeGrammar',
    'PhutilCallbackFilterIterator' => 'FilterIterator',
    'PhutilChannelChannel' => 'PhutilChannel',
    'PhutilChunkedIterator' => 'Iterator',
    'PhutilChunkedIteratorTestCase' => 'PhutilTestCase',
    'PhutilCodeSnippetContextFreeGrammar' => 'PhutilContextFreeGrammar',
    'PhutilCommandString' => 'Phobject',
    'PhutilConsoleServerChannel' => 'PhutilChannelChannel',
    'PhutilConsoleStdinNotInteractiveException' => 'Exception',
    'PhutilConsoleWrapTestCase' => 'PhutilTestCase',
    'PhutilDefaultSyntaxHighlighterEngine' => 'PhutilSyntaxHighlighterEngine',
    'PhutilDefaultSyntaxHighlighterEnginePygmentsFuture' => 'FutureProxy',
    'PhutilDefaultSyntaxHighlighterEngineTestCase' => 'PhutilTestCase',
    'PhutilDeferredLogTestCase' => 'PhutilTestCase',
    'PhutilDocblockParserTestCase' => 'PhutilTestCase',
    'PhutilEditDistanceMatrixTestCase' => 'PhutilTestCase',
    'PhutilEmailAddressTestCase' => 'PhutilTestCase',
    'PhutilErrorHandlerTestCase' => 'PhutilTestCase',
    'PhutilEventType' => 'PhutilEventConstants',
    'PhutilExcessiveServiceCallsDaemon' => 'PhutilTortureTestDaemon',
    'PhutilExecChannel' => 'PhutilChannel',
    'PhutilExtensionsTestCase' => 'PhutilTestCase',
    'PhutilFatalDaemon' => 'PhutilTortureTestDaemon',
    'PhutilFileLock' => 'PhutilLock',
    'PhutilFileLockTestCase' => 'PhutilTestCase',
    'PhutilGitURITestCase' => 'PhutilTestCase',
    'PhutilHangForeverDaemon' => 'PhutilTortureTestDaemon',
    'PhutilHelpArgumentWorkflow' => 'PhutilArgumentWorkflow',
    'PhutilJSONProtocolChannel' => 'PhutilProtocolChannel',
    'PhutilJSONProtocolChannelTestCase' => 'PhutilTestCase',
    'PhutilJSONTestCase' => 'PhutilTestCase',
    'PhutilJavaCodeSnippetContextFreeGrammar' => 'PhutilCLikeCodeSnippetContextFreeGrammar',
    'PhutilKeyValueCacheAPC' => 'PhutilKeyValueCache',
    'PhutilKeyValueCacheDirectory' => 'PhutilKeyValueCache',
    'PhutilKeyValueCacheInRequest' => 'PhutilKeyValueCache',
    'PhutilKeyValueCacheMemcache' => 'PhutilKeyValueCache',
    'PhutilKeyValueCacheNamespace' => 'PhutilKeyValueCacheProxy',
    'PhutilKeyValueCacheOnDisk' => 'PhutilKeyValueCache',
    'PhutilKeyValueCacheProfiler' => 'PhutilKeyValueCacheProxy',
    'PhutilKeyValueCacheProxy' => 'PhutilKeyValueCache',
    'PhutilKeyValueCacheStack' => 'PhutilKeyValueCache',
    'PhutilKeyValueCacheTestCase' => 'ArcanistPhutilTestCase',
    'PhutilLanguageGuesserTestCase' => 'PhutilTestCase',
    'PhutilLexerSyntaxHighlighter' => 'PhutilSyntaxHighlighter',
    'PhutilLipsumContextFreeGrammar' => 'PhutilContextFreeGrammar',
    'PhutilLockException' => 'Exception',
    'PhutilMarkupTestCase' => 'PhutilTestCase',
    'PhutilMetricsChannel' => 'PhutilChannelChannel',
    'PhutilMissingSymbolException' => 'Exception',
    'PhutilNiceDaemon' => 'PhutilTortureTestDaemon',
    'PhutilOpaqueEnvelopeTestCase' => 'PhutilTestCase',
    'PhutilPHPCodeSnippetContextFreeGrammar' => 'PhutilCLikeCodeSnippetContextFreeGrammar',
    'PhutilPHPFragmentLexer' => 'PhutilLexer',
    'PhutilPHPFragmentLexerHighlighterTestCase' => 'PhutilTestCase',
    'PhutilPHPFragmentLexerTestCase' => 'PhutilTestCase',
    'PhutilPHPObjectProtocolChannel' => 'PhutilProtocolChannel',
    'PhutilPHPObjectProtocolChannelTestCase' => 'PhutilTestCase',
    'PhutilPHTTestCase' => 'PhutilTestCase',
    'PhutilPayPalAPIFuture' => 'FutureProxy',
    'PhutilPersonTest' => 'PhutilPerson',
    'PhutilProcessGroupDaemon' => 'PhutilTortureTestDaemon',
    'PhutilProtocolChannel' => 'PhutilChannelChannel',
    'PhutilProxyException' => 'Exception',
    'PhutilQueryStringParserTestCase' => 'PhutilTestCase',
    'PhutilReadableSerializerTestCase' => 'PhutilTestCase',
    'PhutilRealnameContextFreeGrammar' => 'PhutilContextFreeGrammar',
    'PhutilRemarkupEngine' => 'PhutilMarkupEngine',
    'PhutilRemarkupEngineRemarkupCodeBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupDefaultBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupHeaderBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupHorizontalRuleBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupInlineBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupListBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupLiteralBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupNoteBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupQuotesBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupSimpleTableBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupTableBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineTestCase' => 'PhutilTestCase',
    'PhutilRemarkupRuleBold' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleDel' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleDocumentLink' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleEscapeRemarkup' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleHyperlink' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleItalic' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleLinebreaks' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleMonospace' => 'PhutilRemarkupRule',
    'PhutilSaturateStdoutDaemon' => 'PhutilTortureTestDaemon',
    'PhutilShellLexer' => 'PhutilLexer',
    'PhutilShellLexerTestCase' => 'PhutilTestCase',
    'PhutilSimpleOptionsLexer' => 'PhutilLexer',
    'PhutilSimpleOptionsLexerTestCase' => 'PhutilTestCase',
    'PhutilSimpleOptionsTestCase' => 'PhutilTestCase',
    'PhutilSocketChannel' => 'PhutilChannel',
    'PhutilSyntaxHighlighterException' => 'Exception',
    'PhutilTestCase' => 'ArcanistPhutilTestCase',
    'PhutilTortureTestDaemon' => 'PhutilDaemon',
    'PhutilTranslatorTestCase' => 'PhutilTestCase',
    'PhutilURITestCase' => 'PhutilTestCase',
    'PhutilUTF8TestCase' => 'PhutilTestCase',
    'PhutilUtilsTestCase' => 'PhutilTestCase',
    'PhutilXHPASTSyntaxHighlighterFuture' => 'FutureProxy',
    'PhutilXHPASTSyntaxHighlighterTestCase' => 'PhutilTestCase',
    'PhutilcsprintfTestCase' => 'ArcanistTestCase',
    'PhutilxsprintfTestCase' => 'ArcanistTestCase',
    'QueryFuture' => 'Future',
    'TestAbstractDirectedGraph' => 'AbstractDirectedGraph',
    'XHPASTNode' => 'AASTNode',
    'XHPASTNodeTestCase' => 'PhutilTestCase',
    'XHPASTSyntaxErrorException' => 'Exception',
    'XHPASTToken' => 'AASTToken',
    'XHPASTTree' => 'AASTTree',
    'XHPASTTreeTestCase' => 'PhutilTestCase',
  ),
));
