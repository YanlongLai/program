/* $Id: perm.h,v 1.1 2000/05/08 12:24:36 davidyu Exp $ */
#ifndef INCLUDE_PERM_H
#define INCLUDE_PERM_H

#define PERM_BASIC        000000000001
#define PERM_CHAT         000000000002
#define PERM_PAGE         000000000004
#define PERM_POST         000000000010
#define PERM_LOGINOK      000000000020
#define PERM_MAILLIMIT    000000000040
#define PERM_CLOAK        000000000100
#define PERM_SEECLOAK     000000000200
#define PERM_XEMPT        000000000400
#define PERM_DENYPOST     000000001000
#define PERM_BM           000000002000
#define PERM_ACCOUNTS     000000004000
#define PERM_CHATROOM     000000010000
#define PERM_BOARD        000000020000
#define PERM_SYSOP        000000040000
#define PERM_BBSADM       000000100000 
#define PERM_NOTOP        000000200000 
#define PERM_VIOLATELAW   000000400000 
#define PERM_19           000001000000 
#define PERM_20           000002000000 
#define PERM_VIEWSYSOP    000004000000 
#define PERM_LOGUSER      000010000000 
#define PERM_ANNOUNCE     000020000000 
#define PERM_RELATION     000040000000 
#define PERM_SMG          000100000000 
#define PERM_PRG          000200000000 
#define PERM_ACTION       000400000000 
#define PERM_PAINT        001000000000 
#define PERM_LAW          002000000000 
#define PERM_SYSSUBOP     004000000000 
#define PERM_MSYSOP       010000000000 
#define PERM_PTT          020000000000 

#define NUMPERMS        32

#define PERM_DEFAULT    (PERM_BASIC | PERM_CHAT | PERM_PAGE )
#define PERM_MANAGER    (PERM_RELATION | PERM_SMG | PERM_ACTION | PERM_PAINT | PERM_LAW)
#define PERM_ADMIN      (PERM_ACCOUNTS | PERM_SYSOP | PERM_SYSSUBOP | PERM_MANAGER | PERM_BM)
#define PERM_ALLBOARD   (PERM_SYSOP | PERM_BOARD)
#define PERM_LOGINCLOAK (PERM_SYSOP | PERM_ACCOUNTS)
#define PERM_SEEULEVELS (PERM_SYSOP)
#define PERM_SEEBLEVELS (PERM_SYSOP | PERM_BM)
#define PERM_NOTIMEOUT  (PERM_SYSOP)
#define PERM_READMAIL   (PERM_BASIC)
#define PERM_FORWARD    (PERM_BASIC)    /* to do the forwarding */
#define PERM_INTERNET   (PERM_LOGINOK)  /* 身份認證過關的才能寄信到 Internet */

#define HAS_PERM(x)     ((x) ? cuser.userlevel & (x) : 1)
#define HAVE_PERM(x)    (cuser.userlevel&(x))
#define PERM_HIDE(u)    ((u)->userlevel & PERM_SYSOP && \
			 (u)->userlevel & PERM_DENYPOST)
#endif
