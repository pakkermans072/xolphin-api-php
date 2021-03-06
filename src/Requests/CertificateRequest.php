<?php

namespace Xolphin\Requests;

class CertificateRequest
{
    /** @var int */
    private $productId;

    /** @var int */
    private $years;

    /** @var string */
    private $csr;

    /** @var string $dcvType use one of the following: EMAIL_VALIDATION, FILE_VALIDATION, DNS_VALIDATION */
    private $dcvType;

    /** @var string[] */
    private $subjectAlternativeNames = [];

    /** @var DCVDomain[] */
    private $dcv = [];

    /** @var string */
    private $company;

    /** @var string */
    private $department;

    /** @var string */
    private $address;

    /** @var string */
    private $zipcode;

    /** @var string */
    private $city;

    /** @var string */
    private $approverFirstName;

    /** @var string */
    private $approverLastName;

    /** @var string */
    private $approverEmail;

    /** @var string */
    private $approverPhone;

    /** @var string */
    private $kvk;

    /** @var string */
    private $reference;

    /** @var string */
    private $referenceOrderNr;

    /** @var string */
    private $sa_email;

    /** @var string use class RequestLanguage */
    private $language;

    /** @var string */
    private $uniqueValueDcv = null;

    /**
     * Request constructor.
     * @param int $productId
     * @param int $years
     * @param string $csr
     * @param string $dcvType
     */
    public function __construct(int $productId, int $years, string $csr, string $dcvType)
    {
        $this->productId = $productId;
        $this->years = $years;
        $this->csr = $csr;
        $this->dcvType = $dcvType;
    }

    /**
     * @return array
     */
    public function getApiRequestBody(): array
    {
        $result = [];

        $result['product'] = $this->productId;
        $result['years'] = $this->years;
        $result['csr'] = $this->csr;
        $result['dcvType'] = $this->dcvType;

        if (!empty($this->language)) {
            $result['language'] = $this->language;
        }
        if (!empty($this->subjectAlternativeNames)) {
            $result['subjectAlternativeNames'] = implode(',', $this->subjectAlternativeNames);
        }
        if (!empty($this->dcv)) {
            $result['dcv'] = json_encode($this->dcv);
        }
        if (!empty($this->company)) {
            $result['company'] = $this->company;
        }
        if (!empty($this->department)) {
            $result['department'] = $this->department;
        }
        if (!empty($this->address)) {
            $result['address'] = $this->address;
        }
        if (!empty($this->zipcode)) {
            $result['zipcode'] = $this->zipcode;
        }
        if (!empty($this->city)) {
            $result['city'] = $this->city;
        }
        if (!empty($this->approverFirstName)) {
            $result['approverFirstName'] = $this->approverFirstName;
        }
        if (!empty($this->approverLastName)) {
            $result['approverLastName'] = $this->approverLastName;
        }
        if (!empty($this->approverEmail)) {
            $result['approverEmail'] = $this->approverEmail;
        }
        if (!empty($this->approverPhone)) {
            $result['approverPhone'] = $this->approverPhone;
        }
        if (!empty($this->kvk)) {
            $result['kvk'] = $this->kvk;
        }
        if (!empty($this->reference)) {
            $result['reference'] = $this->reference;
        }
        if (!empty($this->referenceOrderNr)) {
            $result['referenceOrderNr'] = $this->referenceOrderNr;
        }
        if (!empty($this->sa_email)) {
            $result['sa_email'] = $this->sa_email;
        }
        if (!is_null($this->uniqueValueDcv)) {
            $result['uniqueValueDcv'] = $this->uniqueValueDcv;
        }

        return $result;
    }

    /**
     * @return string[]
     */
    public function getSubjectAlternativeNames(): array
    {
        return $this->subjectAlternativeNames;
    }

    /**
     * @param string $subjectAlternativeNames
     * @return CertificateRequest
     */
    public function addSubjectAlternativeNames(string $subjectAlternativeNames): CertificateRequest
    {
        $this->subjectAlternativeNames[] = $subjectAlternativeNames;
        return $this;
    }

    /**
     * @return DCVDomain[]
     */
    public function getDcv(): array
    {
        return $this->dcv;
    }

    /**
     * @param DCVDomain $dcv
     * @return CertificateRequest
     */
    public function addDcv(DCVDomain $dcv): CertificateRequest
    {
        $this->dcv[] = $dcv;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return CertificateRequest
     */
    public function setCompany(string $company): CertificateRequest
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     * @return CertificateRequest
     */
    public function setDepartment(string $department): CertificateRequest
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return CertificateRequest
     */
    public function setAddress(string $address): CertificateRequest
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return CertificateRequest
     */
    public function setZipcode(string $zipcode): CertificateRequest
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return CertificateRequest
     */
    public function setCity(string $city): CertificateRequest
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverFirstName(): string
    {
        return $this->approverFirstName;
    }

    /**
     * @param string $approverFirstName
     * @return CertificateRequest
     */
    public function setApproverFirstName(string $approverFirstName): CertificateRequest
    {
        $this->approverFirstName = $approverFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverLastName(): string
    {
        return $this->approverLastName;
    }

    /**
     * @param string $approverLastName
     * @return CertificateRequest
     */
    public function setApproverLastName(string $approverLastName): CertificateRequest
    {
        $this->approverLastName = $approverLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverEmail(): string
    {
        return $this->approverEmail;
    }

    /**
     * @param string $approverEmail
     * @return CertificateRequest
     */
    public function setApproverEmail(string $approverEmail): CertificateRequest
    {
        $this->approverEmail = $approverEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverPhone(): string
    {
        return $this->approverPhone;
    }

    /**
     * @param string $approverPhone
     * @return CertificateRequest
     */
    public function setApproverPhone(string $approverPhone): CertificateRequest
    {
        $this->approverPhone = $approverPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getKvk(): string
    {
        return $this->kvk;
    }

    /**
     * @param string $kvk
     * @return CertificateRequest
     */
    public function setKvk(string $kvk): CertificateRequest
    {
        $this->kvk = $kvk;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return CertificateRequest
     */
    public function setReference(string $reference): CertificateRequest
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceOrderNr(): string
    {
        return $this->referenceOrderNr;
    }

    /**
     * @param string $referenceOrderNr
     * @return CertificateRequest
     */
    public function setReferenceOrderNr(string $referenceOrderNr): CertificateRequest
    {
        $this->referenceOrderNr = $referenceOrderNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaEmail(): string
    {
        return $this->sa_email;
    }

    /**
     * @param string $sa_email
     * @return CertificateRequest
     */
    public function setSaEmail(string $sa_email): CertificateRequest
    {
        $this->sa_email = $sa_email;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $lang use class RequestLanguage
     * @return CertificateRequest
     */
    public function setLanguage(string $lang): CertificateRequest
    {
        $this->language = $lang;
        return $this;
    }

    /**
     * @return string
     */
    public function getUniqueValueDcv(): string
    {
        return $this->uniqueValueDcv;
    }

    /**
     * @param string $uniqueValue
     * @return CertificateRequest
     */
    public function setUniqueValueDcv(string $uniqueValue): CertificateRequest
    {
        $this->uniqueValueDcv = $uniqueValue;
        return $this;
    }
}
