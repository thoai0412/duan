<?

namespace App\Components;

class MenuRecusive{

    private $html;
    public function __construct($html)
    {
        $this->html ='';
    }

    public function menuRecusiveAdd($parentId= 0, $subMark= '')
    {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach($data as $dataItem){
            $this->html .= '<option value="' . $dataItem->id . '">'.$subMark. $dataItem->name .'</option>';
            $this->menuRecusiveAdd($dataItem->id, $subMark. '--');
        }
        return $this->html;


    }
}