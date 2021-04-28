# thinkphp6.0 火币REST API请求库 扩展包


## 安装

使用thinkphp6.0

```shell
composer require love-dj/huobi dev-main
```


huobi.php配置文件在config文件中



## 例子
```
namespace app\controller;

use app\BaseController;
use think\Huobi;

class TestController extends BaseController
{
    /**
     * @var think\Huobi
     */
    protected $huobi;


    public function __construct(Huobi $huobi)
    {
        $this->huobi = $huobi;
    }

    public function index()
    {
        dd($this->huobi->get_account_balance());
    }

}

```