<?php

namespace App\Helpers;


class Messages
{
    private static $arMessages = [
        //AUTH
        'REGISTERED_SUCCESSFULLY' => 'تم إنشاء الحساب ينجاح',
        'REGISTRATION_FAILED' => 'فشلت عملية إنشاء الحساب!',
        'BLOCKED_DEVICE' => 'تم حظر الحساب!',
        'REGISTRATION_CLOSED' => 'تم إغلاق التسجيل من قبل الإدارة',
        'AUTH_CODE_ERROR' => 'رمز التفعيل غير صحيح, حاول مرة أخرى',
        'AUTH_CODE_SENT_BEFORE' => 'تم إرسال رمز التفعيل مسبقا, الرجاء مراجعة الرسائل الواردة من فُل',
        'NO_AUTH_CODE' => 'العملية غير صحيحة!',
        'UNAUTHORISED' => 'لا يوجد لديك صلاحيات, قم بتسجيل الدخول',
        'IN_ACTIVE_ACCOUNT' => 'رجاء, قم بتفعيل الحساب, راجع الرسائل الواردة ',
        'ERROR_CREDENTIALS' => 'بيانات تسجيل الدخول غير صحيحة!, تأكد و حاول مرة أخرى',
        'LOGGED_OUT_SUCCESSFULLY' => 'تم تسجيل الخروج بنجاح',
        'LOGGED_IN_SUCCESSFULLY' => 'تم تسجيل الدخول بنجاح',
        'LOGIN_IN_FAILED' => 'تعذر تسجيل الدخول, حاول مرة أخرى',
        'NO_ACCOUNT' => 'رقم الجوال المدخل غير مسجل!',
        'ACCOUNT_EXIST' => 'البريد الإلكتروني المدخل مسجل مسبقا!',
        'MOBILE_EXIST' => 'الجوال المدخل المدخل مسجل مسبقا!',
        'AUTH_CODE_SENT' => 'تم إرسال رمز التفعيل بنجاح',
        'SUCCESS_AUTH' => 'تم تفعيل الحساب بنجاح',
        'favorite' => 'تم اضافه للمفضله بنجاح',

        //PASSWORD
        'FORGET_PASSWORD_SUCCESS' => 'تم إرسال رمز الإستعادة بنجاح',
        'FORGET_PASSWORD_FAILED' => 'فشل في إرسال رمز الإستعادة!',
        'PASSWORD_RESET_CODE_CORRECT' => 'رمز الإستعادة صحيح, قم بتعين كلمة مرور جديدة',
        'PASSWORD_RESET_CODE_ERROR' => 'رمز الإستعادة غير صحيح, حاول مرة أخرى',
        'NO_PASSWORD_RESET_CODE' => 'لا يوجد طلب إستعادة لكلمة المرور, العملية مرفوضة',
        'PASS_RESET_CODE_SENT_BEFORE' => 'تم إرسال رمز إستعادة كلمة المرور مسبقا, الرجاء مراجعة الرسائل الواردة',

        'RESET_PASSWORD_SUCCESS' => 'تم إستعادة كلمة المورو بنجاح',
        'RESET_PASSWORD_FAILED' => 'فشلت إستعادة كلمة المرور!',

        'CONTACT_US_REQUEST_SUCCESS' => 'تم إرسال طلبك بنجاح, شكرا لك',
        'CONTACT_US_REQUEST_FAILED' => 'فشل في إرسال الطلب, حاول مرة أخرى',
        'USER_UPDATED_SUCCESS' => 'تم تعديل الحساب بنجاح',
        'USER_UPDATED_FAILED' => 'فشل تعديل الحساب!, حاول مرة اخرى',

        'PASSWORD_SENT' => 'تم إرسال كلمة المرور بنجاح, إستخدمها لتسجيل الدخول الى حسابك',
        'PASSWORD_SEND_FAILED' => 'فشل في إرسال كلمة المرور, حاول مرة أٌخرى',
        'PASSWORD_ALREADY_SET' => 'لقد تم تعيين كلمة المرور مسبقاً!',
        'PASSWORD_NOT_SET' => 'قم بطلب كلمة المرور لحسابك!',
        'PASSWORD_changed' => 'لقد تم تعديل كلمه المرور',
        'attempts' => 'لقد استنفذت جميع المحاولات ',
        'MULTI_ACCESS_ERROR' => 'لا يمكن تسجيل الدخول إلى نفس الحساب من جهازين في نفس الوقت',
        'SECURITY_CHECK_SUCCESS' => 'تم إرسال حالتك بنجاح ، حافظ على سلامتك',
        'SECURITY_CHECK_DUPLICATE' => 'لقد قمت بإرسال حالتك سابقاً ، حافظ على سلامتك',
        'SECURITY_CHECK_FAILED' => 'حصل خلل في إرسال حالتك ،رجاءاً حاول مرة أُخرى',
        'exam_fail' => 'نعتذر لم تقم باجتياز الاختبار',
        'profile_exam' => 'يرجى استكمال بياناتك الشخصيه لتقديم الاختبار ',
        'BASKET_IS_EMPTY' => 'سلتك فارغة',

        'exp_date' => 'لقد انتهت صلاحيه الاختبار',

        'CREATE_SUCCESS' => 'تم الإنشاء بنجاح',
        'CREATE_FAILED' => 'فشلت عملية الإنشاء, حاول مرة أُخرى',
        'SEND_FAILED' => 'تم ارسال الدعوه بالفعل',
        'DELETE_SUCCESS' => 'تم الحذف بنجاح',
        'DELETE_FAILED' => 'فشلت عملية الحذف, حاول مرة أُخرى',

        'UPDATE_SUCCESS' => 'تم التعديل بنجاح',
        'UPDATE_FAILED' => 'فشلت عملية التعديل, حاول مرة أُخرى',
        'CART_SUCCESS' => 'تم الاضافة الى السلة بنجاح',
        'ITEM_NOT_FOUND' => 'لم نعثر على هذا السجل',
        'REQUEST_SUCCESS' => 'تم بنجاح',

        'NO_ACCESS_PERMISSION' => 'ليس لديك صلاحية وصول لهذا العنصر',
        'NOT_FOUND' => 'العنصر غير موجود',
        'REORDER_SUCCESS' => 'تم أعادة الطلب بنجاح',

        // 'PENDING','ACCEPTED','DECLINED','DELIVERING','RECEIVED','ONWAY','PROCESSING','FILLED','DELIVERED','COMPLETED','CANCELLED_BY_VENDOR','CANCELLED_BY_CUSTOMER'

        // Order Status
        'PENDING' => 'تم إنشاء طلبك بنجاح ',
        'ACCEPTED' => 'تم قبول طلبك من طرف موزع : ',
        'DECLINED' => 'نعتذر تم رفض طلبك من قبل موزع : ',
        'DELIVERING' => 'أناني في الطريق أليك',
        'RECEIVED' => 'تم أستلام الأنبوبة من طرف الموزع',
        'ONWAY' => 'الموزع في الطريقك الك',
        'PROCESSING' => 'الطلب الخاص بك قيد التعبئة',
        'FILLED' => 'تم الإنتهاء من تعبأت طلبك',
        'DELIVERED' => 'هل تم توصيل طلبك يرجى تأكيد التسليم',
        'COMPLETED' => 'نحن هنا لخدمتكم',
        'CANCELLED_BY_VENDOR' => 'نعتذر تم إلغاء طلبك من قبل موزع : ',
        'CANCELLED_BY_CUSTOMER' => 'تم رفض طلب من قبل الزبون :',
    ];

    private static $enMessages = [
        //AUTH
        'REGISTERED_SUCCESSFULLY' => 'Account created successfully',
        'BLOCKED_DEVICE' => 'Account is blocked',
        'REGISTRATION_CLOSED' => 'Registration closed by system admin',
        'AUTH_CODE_ERROR' => 'Activation code error, try again',
        'AUTH_CODE_SENT_BEFORE' => 'Auth code sent before, please check ful messages in inbox!',
        'NO_AUTH_CODE' => 'Process denied, incorrect',
        'UNAUTHORISED' => 'Unauthorised, please login',
        'IN_ACTIVE_ACCOUNT' => 'Please, activate your account, check ful messages in inbox',
        'ERROR_CREDENTIALS' => 'Error login credentials, check and try again',
        'LOGGED_OUT_SUCCESSFULLY' => 'Logged out successfully',
        'LOGGED_IN_SUCCESSFULLY' => 'Logged in successfully',
        'LOGIN_IN_FAILED' => 'Login failed, try again!',
        'NO_ACCOUNT' => 'User mobile is not registered!',
        'AUTH_CODE_SENT' => 'Auth code sent successfully',
        'ACCOUNT_EXIST' => 'Email registered before!',
        'MOBILE_EXIST' => 'Mobile registered before!',
        'SUCCESS_AUTH' => 'Account activated successfully',
        'exam_fail' => 'We apologize, you could not pass the exam',
        'attempts' => 'You exceeded the the number of allowed attempts',
        'profile_exam' => 'please complate your profile',
        'ITEM_NOT_FOUND' => 'We can not found this record',
        'SEND_FAILED' => 'You have been alrdey send',
        'BASKET_IS_EMPTY' => 'Your Basket Empty',



        //PASSWORD
        'FORGET_PASSWORD_SUCCESS' => 'Password reset code sent successfully',
        'FORGET_PASSWORD_FAILED' => 'Failed to sent password reset code!',
        'PASSWORD_RESET_CODE_CORRECT' => 'Correct password reset code, set new password',
        'PASSWORD_RESET_CODE_ERROR' => 'Password reset code error, try again',
        'NO_PASSWORD_RESET_CODE' => 'No forget password request exist, process denied!',
        'PASS_RESET_CODE_SENT_BEFORE' => 'Password reset code sent before, please check messages in inbox!',
        'exp_date' => 'This Quiz Expired',

        'RESET_PASSWORD_SUCCESS' => 'Reset password success',
        'RESET_PASSWORD_FAILED' => 'Failed to reset password!',
        'CART_SUCCESS' => 'Add To Cart successfully',

        'CONTACT_US_REQUEST_SUCCESS' => 'Contact request sent successfully, thanks',
        'CONTACT_US_REQUEST_FAILED' => 'Failed to send contact request, try again',

        'USER_UPDATED_SUCCESS' => 'Profile updated successfully',
        'USER_UPDATED_FAILED' => 'Profile update failed!, try again',

        'PASSWORD_SENT' => 'Password sent successfully, use it to login to your account',
        'PASSWORD_SEND_FAILED' => 'Failed to sent password, please try again',
        'PASSWORD_ALREADY_SET' => 'Password has been set before!',
        "PASSWORD_NOT_SET" => 'Please request your account password!',

        'MULTI_ACCESS_ERROR' => 'It is not possible to log in to the same account from two devices at once!',
        'SECURITY_CHECK_SUCCESS' => 'Your status has been sent successfully, keep safe',
        'SECURITY_CHECK_DUPLICATE' => 'Your status has been sent before, keep safe',
        'SECURITY_CHECK_FAILED' => 'There was a malfunction in submitting your case, please try again',

        'CREATE_SUCCESS' => 'Created successfully',
        'CREATE_FAILED' => 'Create failed, please try again',

        'DELETE_SUCCESS' => 'Deleted successfully',
        'DELETE_FAILED' => 'Delete failed, please try again',
        'REQUEST_SUCCESS' => 'Successfully',
        'UPDATE_SUCCESS' => 'Updated successfully',
        'UPDATE_FAILED' => 'Delete failed, please try again',
        'favorite' => 'Added to your favorite list',
        'favorite_delete' => 'Removed from your favorite list',
        'PASSWORD_changed' => 'PASSWORD_changed',
        'NO_ACCESS_PERMISSION' => 'You dont have access permission to this component',
        'NOT_FOUND' => 'Object not fount',
        'REORDER_SUCCESS' => 'The request was successfully re-order',

        // 'PENDING','ACCEPTED','DECLINED','DELIVERING','RECEIVED','ONWAY','PROCESSING','FILLED','DELIVERED','COMPLETED','CANCELLED_BY_VENDOR','CANCELLED_BY_CUSTOMER'

        // Order Status
        'PENDING' => 'Your request was created successfully',
        'ACCEPTED' => 'Your request has been accepted by a distributor: ',
        'DECLINED' => 'Sorry, your order was rejected by a distributor:',
        'DELIVERING' => 'Im on my way to you',
        'RECEIVED' => 'The tube has been received by the distributor',
        'ONWAY' => 'The dealer is on your way',
        'PROCESSING' => 'Your order is being packed',
        'FILLED' => 'Your request has been filled',
        'DELIVERED' => 'Has your order been delivered, please confirm delivery',
        'COMPLETED' => 'We are here to serve you',
        'CANCELLED_BY_VENDOR' => 'We apologize your order has been canceled by a distributor :',
        'CANCELLED_BY_CUSTOMER' => 'The request was rejected by the customer:',

    ];

    public static function getMessage($code)
    {
        return request()->header('lang') == 'en' ? self::$enMessages[$code] : self::$arMessages[$code];
    }
}
