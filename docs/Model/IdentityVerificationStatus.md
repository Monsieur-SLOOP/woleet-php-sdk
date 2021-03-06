# IdentityVerificationStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Identity verification status code:&lt;br&gt; - VERIFIED: success: the signature key is controlled by the identity server (ie. the server provided a valid proof of ownership of the key),&lt;br&gt; and/or the signature key matches an identity on the identity server (ie. the server claimed the signer identity),&lt;br&gt; and/or the identity is signed (ie. the signer claimed his identity by including it in the signed data),&lt;br&gt; and/or the signed identity matches the one on the identity server (both the signer and the identity server claim the identity),&lt;br&gt; - HTTP_ERROR: error: the identity URL cannot be called or returned an HTTP error other than 404&lt;br&gt; - IDENTITY_NOT_FOUND: error: the key does not match any identity on the identity server (ie. the identity URL returned a HTTP error 404)&lt;br&gt; - IDENTITY_MISMATCH: error: the signed identity mismatches the identity on the identity server&lt;br&gt; - INVALID_SIGNATURE: error: the identity server returned an invalid signature (ie. the server failed to provide a valid proof of ownership of the key)&lt;br&gt; - DEPRECATED_KEY: error: the key expired or was revoked before the signature timestamp. | [optional] 
**text** | **string** | Identity verification status text (gives more insights about the verification process). | [optional] 
**certificates** | [**\WooletClient\Model\X509SubjectIssuer[]**](X509SubjectIssuer.md) | Array of subjects and issuers of the certificates extracted from the identity URL&#x27;s TLS certificate. | [optional] 
**identity** | [**\WooletClient\Model\Identity**](Identity.md) |  | [optional] 
**signed_identity** | [**\WooletClient\Model\Identity**](Identity.md) |  | [optional] 
**signed_issuer_domain** | **string** | Domain name of the identity issuer (ie. of the organization who verified the identity). | [optional] 
**key** | [**\WooletClient\Model\Key**](Key.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

