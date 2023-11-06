https://docs.laminas.dev/laminas-form/v3/quick-start/#creation-via-factory

for each form add config

```php
  "form_elements" => [
        "factories" => [
            CampaignCreateCampaignForm::class => CampaignCreateCampaignFormFactory::class,
            CampaignDownloadBusinessesForm::class => CampaignDownloadBusinessesFormFactory::class,
        ],
    ],
```