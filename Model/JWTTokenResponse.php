<?php
/**
 * JWTTokenResponse.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.40
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the JWTTokenResponse model.
 *
 * @author  OpenAPI Generator team
 */
class JWTTokenResponse
{
  /**
   * @var string|null
   * @SerializedName("token")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $token;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->token = isset($data['token']) ? $data['token'] : null;
  }

  /**
   * Gets token.
   */
  public function getToken(): ?string
  {
    return $this->token;
  }

  /**
   * Sets token.
   *
   * @return $this
   */
  public function setToken(string $token = null)
  {
    $this->token = $token;

    return $this;
  }
}
